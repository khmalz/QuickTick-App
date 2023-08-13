<?php

namespace App\Http\Controllers\Admin;

use App\Models\Bus;
use App\Models\City;
use App\Models\Rute;
use Illuminate\Http\Request;
use App\Http\Requests\RuteRequest;
use App\Http\Controllers\Controller;

class RuteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $departure = $request->departure;
        $asal = $request->asal;

        $rutes = [];

        if ($departure || $asal) {
            $rutes = Rute::with('bus.company')
                ->when($asal, function ($query) use ($asal) {
                    $query->where('asal', $asal);
                })
                ->when($departure, function ($query) use ($departure) {
                    $query->whereDate('departure', $departure);
                })
                ->get();
        }

        $cities = City::all();

        return view('admin.rute.index', compact('rutes', 'cities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $buses = Bus::with('company')->get();
        $cities = City::with('terminals')->get();

        return view('admin.rute.create', compact('buses', 'cities'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RuteRequest $request)
    {
        $data = $request->validated();
        $data['harga'] = str_replace(['.', ','], '', $data['harga']);

        Rute::create($data);

        return to_route('rute.index')->with('success', 'Successfully created a new rute');
    }

    /**
     * Display the specified resource.
     */
    public function show(Rute $rute)
    {
        $rute->load('bus', 'bus.company');

        return view('admin.rute.detail', compact('rute'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rute $rute)
    {
        $buses = Bus::with('company')->get();
        $cities = City::with('terminals')->get();
        $rute->load('bus', 'bus.company');

        return view('admin.rute.edit', compact('rute', 'buses', 'cities'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RuteRequest $request, Rute $rute)
    {
        $data = $request->validated();
        $data['harga'] = str_replace(['.', ','], '', $data['harga']);

        $rute->update($data);

        return to_route('rute.index')->with('success', 'Successfully edited a rute');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rute $rute)
    {
        $rute->delete();

        return to_route('rute.index')->with('success', 'Successfully deleted a rute');
    }
}
