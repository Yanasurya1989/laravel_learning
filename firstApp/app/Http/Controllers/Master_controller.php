<?php

namespace App\Http\Controllers;

use App\Models\Master_model;
use Illuminate\Http\Request;

class Master_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_master()
    {
        return view('backend.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\Master_model  $master_model
     * @return \Illuminate\Http\Response
     */
    public function show(Master_model $master_model)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Master_model  $master_model
     * @return \Illuminate\Http\Response
     */
    public function edit(Master_model $master_model)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Master_model  $master_model
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Master_model $master_model)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Master_model  $master_model
     * @return \Illuminate\Http\Response
     */
    public function destroy(Master_model $master_model)
    {
        //
    }
}
