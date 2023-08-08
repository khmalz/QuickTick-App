<?php

namespace App\Http\Controllers\Admin;

use App\Models\Rute;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RuteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.rute.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.rute.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Rute $rute)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rute $rute)
    {
        return view('admin.rute.edit', compact('rute'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rute $rute)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rute $rute)
    {
        //
    }
}
