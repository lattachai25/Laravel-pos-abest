<?php

namespace App\Http\Controllers;

use App\branche_order;
use Illuminate\Http\Request;

class BrancheOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
         // dd( $request->all() );
    $input = $request->all();

    for ($i = 0; $i < count($request->key); $i++) {

        $calculate[] = [
            'barcode' => $request->barcode[$i],
            'nameproduct' => $request->nameproduct[$i],
            'unit' => $request->unit[$i],
            'stock' => $request->stock[$i],
            'safety' => $request->safety[$i],
            'order' => $request->order[$i],
            'unit_type' => $request->unit_type[$i],
            // 'order_comment' => $request->order_comment[$i],
            // 'time_order' => $request->time_order[$i],
            'created_at' => date('Y-m-d H:i:s')
        ];
    }
    branche_orders::insert($calculate);
    return redirect('index2')->with('success', 'Update Ordter!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\branche_order  $branche_order
     * @return \Illuminate\Http\Response
     */
    public function show(branche_order $branche_order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\branche_order  $branche_order
     * @return \Illuminate\Http\Response
     */
    public function edit(branche_order $branche_order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\branche_order  $branche_order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, branche_order $branche_order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\branche_order  $branche_order
     * @return \Illuminate\Http\Response
     */
    public function destroy(branche_order $branche_order)
    {
        //
    }
}
