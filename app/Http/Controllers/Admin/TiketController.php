<?php

namespace App\Http\Controllers\Admin;

use App\Models\City;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TiketController extends Controller
{
    /**
     * Display a listing of the resource where the status's ticket is unverified.
     */
    public function indexUnverified(Request $request)
    {
        $asal = $request->asal;
        $tujuan = $request->tujuan;
        $departure = $request->departure;

        $orders = Order::with('rute', 'passenger.user')
            ->withCount('passengerOrders')
            ->whereStatus('unverified')
            ->byDeparture(now())
            ->when($asal ?? false, function ($query) use ($asal) {
                $query->byAsal($asal);
            })
            ->when($tujuan ?? false, function ($query) use ($tujuan) {
                $query->byTujuan($tujuan);
            })
            ->when($departure ?? false, function ($query) use ($departure) {
                $query->byDeparture($departure);
            })
            ->get();
        $cities = City::all();

        return view('admin.ticket.index', compact('orders', 'cities'));
    }

    /**
     * Display a listing of the resource where the status's ticket is verified.
     */
    public function indexVerified(Request $request)
    {
        $asal = $request->asal;
        $tujuan = $request->tujuan;
        $departure = $request->departure;

        $orders = Order::with('rute', 'passenger.user')
            ->withCount('passengerOrders')
            ->whereStatus('verified')
            ->byDeparture(now())
            ->when($asal ?? false, function ($query) use ($asal) {
                $query->byAsal($asal);
            })
            ->when($tujuan ?? false, function ($query) use ($tujuan) {
                $query->byTujuan($tujuan);
            })
            ->when($departure ?? false, function ($query) use ($departure) {
                $query->byDeparture($departure);
            })
            ->get();
        $cities = City::all();

        return view('admin.ticket.index', compact('orders', 'cities'));
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
}
