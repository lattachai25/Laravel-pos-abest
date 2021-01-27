<?php

namespace App\Http\Controllers\Sourcing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\sour_price;
use DB;

class SourPriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('sourcing.sour_price');
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
     * @param  \App\sour_price  $sour_price
     * @return \Illuminate\Http\Response
     */
    public function show(sour_price $sour_price)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\sour_price  $sour_price
     * @return \Illuminate\Http\Response
     */
    public function edit(sour_price $sour_price)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\sour_price  $sour_price
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sour_price $sour_price)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\sour_price  $sour_price
     * @return \Illuminate\Http\Response
     */
    public function destroy(sour_price $sour_price)
    {
        //
    }
}
