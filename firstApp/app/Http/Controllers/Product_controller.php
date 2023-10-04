<?php

namespace App\Http\Controllers;

use App\Models\Product_model;
use Illuminate\Http\Request;

class Product_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('product/view');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product/insert_form');
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product_model  $product_model
     * @return \Illuminate\Http\Response
     */
    public function show(Product_model $product_model)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product_model  $product_model
     * @return \Illuminate\Http\Response
     */
    public function edit(Product_model $product_model)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product_model  $product_model
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product_model $product_model)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product_model  $product_model
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product_model $product_model)
    {
        //
    }
}
