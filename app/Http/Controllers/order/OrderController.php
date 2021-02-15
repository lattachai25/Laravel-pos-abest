<?php

namespace App\Http\Controllers\order;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\product_to_branche;
use App\calculate_order;
use App\product_type;
use App\table_test;
use App\branche;
use App\order;
use App\master;
use App\price;
use App\sku;
use App\plu;
use App\user;
use DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $order = DB::table('product_to_branches')
        ->select('product_to_branches.*','plus.*','skus.*')
        ->join('plus', 'product_to_branches.idplu', '=', 'plus.idplu')
        ->join('skus', 'product_to_branches.idsku', '=', 'skus.idsku')
        ->get();

        return view('order.index', compact('order'));
    }


    public function index2()
    {
        //
        $order = DB::table('calculate_orders')
        ->select('calculate_orders.*')
        ->orderBy('id', 'ASC')
        ->get();

        return view('order.order_show', compact('order'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $order = DB::table('masters')
        ->select('masters.*','plus.*','skus.*','prices.*','product_types.*')
        ->join('plus', 'masters.idplu', '=', 'plus.idplu')
        ->join('skus', 'masters.idsku', '=', 'skus.idsku')
        ->join('prices', 'masters.idsku', '=', 'prices.idsku')
        ->join('product_types', 'masters.idtype', '=', 'product_types.idtype')
        ->paginate(100);

        // ->join('branche', 'masters.idbranche', '=', 'branche.idbranch')

         return view('order.create', compact('order'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function order_show(Request $request)
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
    calculate_order::insert($calculate);
    return redirect('index2')->with('success', 'Update Ordter!');
    }



    public function postData(Request $request)
    {
     // dd( $request->all() );
      $input = $request->all();

        for ($i = 0; $i < count($request->idplu); $i++) {
            $answers[] = [
                'idplu' => $request->idplu[$i],
                'plunamecode' => $request->plunamecode[$i],
                'idsku' => $request->idsku[$i],
                'skunamecode' => $request->skunamecode[$i],
                'idprice' => $request->idprice[$i],
                'idbranche' => $request->idbranche[$i],
                'username' => $request->username[$i],
                'qty' => $request->qty[$i],
                'status' => $request->status[$i],
                'day' => $request->day[$i],
            ];
        }
        product_to_branche::insert($answers);
        return redirect('/order')->with('success', 'Update Ordter!');
    
    }

    public function store(Request $request)
    {

         dd('Post created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(order $order)
    {
        //
    }
}
