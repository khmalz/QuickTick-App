<?php

namespace App\Http\Controllers;

use App\Models\Rute;
use App\Models\Order;
use App\Models\Terminal;
use Illuminate\Http\Request;

class TiketController extends Controller
{
    public function index(Request $request)
    {
        if (!$request->asal) {
            return redirect()->route('home');
        }

        $rute_awal = $request->asal;
        $rute_akhir = $request->tujuan;
        $departure = $request->departure;
        $seat = $request->seat;

        $rutes = Rute::with('bus.company')
            ->where('rute_awal', $rute_awal)
            ->when($rute_akhir ?? false, function ($query) use ($rute_akhir) {
                $query->where('rute_akhir', $rute_akhir);
            })
            ->when($departure ?? false, function ($query) use ($departure) {
                $query->whereDate('departure', $departure);
            }, function ($query) {
                $query->whereDate('departure', '>=', now());
            })
            ->whereAvailableSeats()
            ->orderBy('departure')
            ->get();

        $rutes = $rutes->filter(function ($rute) use ($seat) {
            return $rute->available_seats >= $seat;
        });

        $terminals = Terminal::with('city')->get();

        return view('search', compact('terminals', 'rutes'));
    }

    public function all(Request $request)
    {
        $user = $request->user()->load('passenger');
        $uniqueOrderIds = Order::selectRaw('MIN(id) as min_id')
            ->where('passenger_id', $user->passenger->id)
            ->groupBy('rute_id');

        $tickets = Order::with('rute', 'rute.bus.company')->whereIn('id', $uniqueOrderIds)
            ->get();

        return view('list-tiket', compact('tickets'));
    }

    public function show(Request $request, Order $order)
    {
        $order->load('rute.bus', 'payment', 'passenger.user', 'passengerOrders');

        return view('detail-tiket', compact('order'));
    }
}
