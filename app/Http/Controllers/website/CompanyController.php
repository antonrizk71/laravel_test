<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\website\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $company = Company::all();
        return view('website.companies.companies', compact('company'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('website.companies.create_company');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'name' => 'required|max:255',
            'country' => 'required',
            'city' => 'required',
            'size' => 'required',
        ]);
        $company = Company::create([
            'name' => $validated['name'],
            'country' => $validated['country'],
            'city' => $validated['city'],
            'size' => $validated['city'],

        ]);

        return redirect()->route('company.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\website\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $comp=Company::find($id);
        return view('website.companies.show_company',compact('comp'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\website\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $company = Company::find($id);
        return view('website.companies.update_company', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\website\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request ,$id)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'country' => 'required',
            'city' => 'required',
            'size' => 'required',
        ]);

        Company::where('id', $id)->update([
            'name' => $validated['name'],
            'country' => $validated['country'],
            'city' => $validated['city'],
            'size' => $validated['size'],
        ]);
        return redirect()->route('company.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\website\Company  $company
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        //

        $company = Company::find($id);
        $company->delete();
        return redirect()->route('company.index');
    }
}
