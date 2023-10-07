<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BusRequest;
use App\Models\Bus;
use App\Models\Company;

class BusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $buses = Bus::with('company')->get();

        return view('admin.bus.index', compact('buses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $companies = Company::all();

        return view('admin.bus.create', compact('companies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BusRequest $request)
    {
        $data = $request->validated();

        Bus::create($data);

        return to_route('bus.index')->with('success', 'Successfully created a new bus');
    }

    /**
     * Display the specified resource.
     */
    public function show(Bus $bus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bus $bus)
    {
        $companies = Company::all();

        $bus->load('company');

        return view('admin.bus.edit', compact('bus', 'companies'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BusRequest $request, Bus $bus)
    {
        $data = $request->validated();

        $bus->update($data);

        return to_route('bus.index')->with('success', 'Successfully edit a bus');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bus $bus)
    {
        $bus->delete();

        return to_route('bus.index')->with('success', 'Successfully deleted a bus');
    }
}
