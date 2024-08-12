<?php

namespace App\Http\Controllers\website;

use App\Models\website\Product;
use App\Http\Controllers\Controller;
use App\Models\website\Company;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::with('company')->get();
        $company = Company::all();
        return view('website.products.products', compact('products', 'company'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $company = Company::all();
        return view('website\products\create_product', compact('company'));
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
        // dd($request->all());

        $validated = $request->validate([
            'name' => 'required|max:255',
            'exdate' => 'required',
            'details' => 'required',
            'comp_id' => 'required',
        ]);
        // dd($request['comp_id']);
        $product = Product::create([
            'name' => $validated['name'],
            'exdate' => $validated['exdate'],
            'details' => $validated['details'],
            'company_id' => $validated['comp_id'] ,
        ]);

        
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\website\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
        $product=Product::find($request['id']);
        $company=Company::all();
        return view('website.products.show_product',compact('product','company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\website\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //
        $product=Product::find($request['id']);
        $company=Company::all();
        return view('website.products.update_product',compact('product','company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\website\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $validated = $request->validate([
            'name' => 'required|max:255',
            'exdate' => 'required',
            'details' => 'required',
            'comp_id' => 'required',
        ]);

        Product::where('id', $request->id)->update([
            'name' => $validated['name'],
            'exdate' => $validated['exdate'],
            'details' => $validated['details'],
            'company_id' => $validated['comp_id'] ,
        ]);

        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\website\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        Product::find($request['id'])->delete();
        return redirect()->route('product.index');
    }
}
