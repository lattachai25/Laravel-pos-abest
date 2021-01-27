<?php

namespace App\Http\Controllers\Sourcing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\sour_main;
use DB;


class SourMainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('sourcing.main');
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
     * @param  \App\sour_main  $sour_main
     * @return \Illuminate\Http\Response
     */
    public function show(sour_main $sour_main)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\sour_main  $sour_main
     * @return \Illuminate\Http\Response
     */
    public function edit(sour_main $sour_main)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\sour_main  $sour_main
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sour_main $sour_main)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\sour_main  $sour_main
     * @return \Illuminate\Http\Response
     */
    public function destroy(sour_main $sour_main)
    {
        //
    }
}
