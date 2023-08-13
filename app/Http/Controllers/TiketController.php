<?php

namespace App\Http\Controllers;

use App\Models\Rute;
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
            ->orderBy('departure')
            ->get();

        $terminals = Terminal::with('city')->get();

        return view('search', compact('terminals', 'rutes'));
    }
}
