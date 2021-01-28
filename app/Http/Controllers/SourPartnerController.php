<?php

namespace App\Http\Controllers\Sourcing;

use App\sour_partner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SourPartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('sourcing.sour_partner');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('sourcing.sour_partner');

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


        Board ::create([
            'id_partner' => $request->input('id_partner'),
            'name_part' => $request->input('name_part'),
            'phone' => $request->input('phone'),
            'name_part' => $request->input('name_part'),
            'contact_person' => $request->input('contact_person'),

          ]);




    }

    /**
     * Display the specified resource.
     *
     * @param  \App\sour_partner  $sour_partner
     * @return \Illuminate\Http\Response
     */
    public function show(sour_partner $sour_partner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\sour_partner  $sour_partner
     * @return \Illuminate\Http\Response
     */
    public function edit(sour_partner $sour_partner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\sour_partner  $sour_partner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sour_partner $sour_partner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\sour_partner  $sour_partner
     * @return \Illuminate\Http\Response
     */
    public function destroy(sour_partner $sour_partner)
    {
        //
    }
}
