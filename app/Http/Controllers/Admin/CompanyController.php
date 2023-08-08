<?php

namespace App\Http\Controllers\Admin;

use App\Models\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyRequest;
use Illuminate\Support\Facades\Storage;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies = Company::all();

        return view('admin.company.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.company.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CompanyRequest $request)
    {
        $image = $request->file('logo')->store('companies');

        Company::create([
            'name' => $request->name,
            'logo' => $image
        ]);

        return to_route('company.index')->with('success', 'Successfully created a new partner');
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        return view('admin.company.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CompanyRequest $request, Company $company)
    {
        if ($request->has('logo')) {
            Storage::delete($company->logo);

            $image = $request->file('logo')->store('companies');
        }

        $company->update([
            'name' => $request->name,
            'logo' => $image ?? $company->logo,
        ]);

        return to_route('company.index')->with('success', 'Successfully edited a partner');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        Storage::delete($company->logo);
        $company->delete();

        return to_route('company.index')->with('success', 'Successfully deleted a partner');
    }
}
