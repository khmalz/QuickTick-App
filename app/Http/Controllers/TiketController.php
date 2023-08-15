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

        $rutes = Rute::with('bus.company')
            ->where('rute_awal', $rute_awal)
            ->when($rute_akhir, function ($query) use ($rute_akhir) {
                $query->where('rute_akhir', $rute_akhir);
            })
            ->when($departure, function ($query) use ($departure) {
                $query->whereDate('departure', $departure);
            })
            ->whereAvailableSeats()
            ->orderBy('departure')
            ->get();

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

    public function show(Request $request, Rute $rute)
    {
        $user = $request->user();

        $rute->load(['orders' => function ($query) use ($user) {
            $query->where('passenger_id', $user->passenger->id);
        }]);

        $rute->order = $rute->orders->first();

        abort_if(!$rute->order, 404);

        $passengerOrders = $rute->orders->flatMap(function ($order) {
            return $order->passengerOrders;
        });

        $payment = null;

        if ($rute->order->payment) {
            // Mengambil informasi Payment berdasarkan order_id pada $rute->order
            $payment = $rute->order->payment;
        }

        return view('detail-tiket', compact('user', 'rute', 'passengerOrders', 'payment'));
    }
}
