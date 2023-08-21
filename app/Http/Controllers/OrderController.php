<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Rute;
use App\Models\Order;
use App\Helpers\MixCaseULID;
use Illuminate\Http\Request;
use App\Models\PassengerOrder;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, Rute $rute)
    {
        $departureDateTime = Carbon::createFromFormat('H:i - d F Y', $rute->departure);
        if ($departureDateTime < now() || $rute->available_seats <= 0) return to_route('home');

        $user = $request->user();

        $rute->load(['orders' => function ($query) use ($user) {
            $query->where('passenger_id', $user->passenger->id);
        }]);

        return view('pesan', compact('rute', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Rute $rute)
    {
        $jumlahPenumpang = $request->jumlah_penumpang;
        $data = $request->data;

        $order = $rute->orders()->create([
            'passenger_id' => $request->passenger_id,
        ]);

        for ($i = 0; $i < $jumlahPenumpang; $i++) {
            $order->passengerOrders()->create([
                'kode' => MixCaseULID::generate(),
                'passenger_name' => $data['nama'][$i],
                'passenger_ktp' => $data['ktp'][$i],
                'seat_code' => "10"
            ]);
        }

        return to_route('payment.index', $order->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        $order->load('rute.bus', 'payment', 'passenger.user', 'passengerOrders');

        return view('update-tiket', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        DB::beginTransaction();

        try {
            // Menghandle update data
            if ($request->edit) {
                foreach ($request->edit ?? [] as $id => $data) {
                    $passengerOrder = PassengerOrder::find($id);

                    if ($passengerOrder) {
                        $passengerOrder->update([
                            'passenger_name' => $data['name'],
                            'passenger_ktp' => $data['ktp'],
                        ]);
                    }
                }
            }

            // Menghandle delete data
            if ($request->delete) {
                foreach ($request->delete as $id) {
                    $passengerOrder = PassengerOrder::find($id);

                    if ($passengerOrder) {
                        $passengerOrder->delete();
                    }
                }
            }

            DB::commit();

            return to_route('tiket.show', $order->id)->with('success', 'Changes have been saved successfully');
        } catch (\Exception $e) {
            DB::rollback();

            return to_route('tiket.show', $order->id)->with('error', 'Failled to update a order');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
