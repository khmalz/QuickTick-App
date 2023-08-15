<?php

namespace App\Http\Controllers;

use App\Helpers\MixCaseULID;
use App\Models\Rute;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, Rute $rute)
    {
        if ($rute->available_seats <= 0) return to_route('home');

        $user = $request->user();

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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
