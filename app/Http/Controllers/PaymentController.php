<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\Order;
use App\Models\Wallet;
use App\Models\Payment;
use Illuminate\Http\Request;
use App\Models\VirtualAccount;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Order $order)
    {
        if ($order->payment) return to_route('tiket.list');

        return view('payment', compact('order'));
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
    public function store(Request $request, Order $order)
    {
        abort_if($order->payment, 401);

        DB::beginTransaction();

        try {
            // Membuat payment
            $payment = Payment::create([
                'order_id' => $order->id,
                'method' => $request->metode,
            ]);

            // Membuat informasi kartu (card) jika metode adalah 'card'
            if ($request->metode === 'card') {
                $payment->card()->create([
                    'name' => $request->card['name'],
                    'number' => $request->card['number'],
                    'expiration_date' => $request->card['expiration_date'],
                    'security_code' => $request->card['security_code'],
                ]);
            }
            // Membuat informasi dompet elektronik (wallet) jika metode adalah 'wallet'
            elseif ($request->metode === 'wallet') {
                $payment->wallet()->create([
                    'wallet' => $request->wallet['wallet'],
                    'number' => $request->wallet['number'],
                ]);
            }
            // Membuat informasi Virtual Account (va) jika metode adalah 'va'
            elseif ($request->metode === 'va') {
                $payment->va()->create([]);
            }

            DB::commit(); // Commit transaksi jika semua berhasil
        } catch (\Exception $e) {
            DB::rollBack();

            return to_route('payment.index', $order->id)->with('error', 'Failled to paying a order');
        }

        return to_route('payment.success', $order->id)->with('success', 'Successfully paying a order');
    }

    /**
     * Display the specified resource.
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payment $payment)
    {
        //
    }

    public function success(Order $order)
    {
        if (!$order->payment) {
            return to_route('payment.index', $order->id);
        }

        return view('success-payment');
    }
}
