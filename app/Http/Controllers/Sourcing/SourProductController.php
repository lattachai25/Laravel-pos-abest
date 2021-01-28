<?php

namespace App\Http\Controllers\Sourcing;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\sour_product;
use DB;

class SourProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('sourcing.sour_product');
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
     * @param  \App\sour_product  $sour_product
     * @return \Illuminate\Http\Response
     */
    public function show(sour_product $sour_product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\sour_product  $sour_product
     * @return \Illuminate\Http\Response
     */
    public function edit(sour_product $sour_product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\sour_product  $sour_product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sour_product $sour_product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\sour_product  $sour_product
     * @return \Illuminate\Http\Response
     */
    public function destroy(sour_product $sour_product)
    {
        //
    }
}
