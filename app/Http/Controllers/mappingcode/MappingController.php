<?php

namespace App\Http\Controllers\mappingcode;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\product_to_branche;
use App\product_type;
use App\table_test;
use App\branche;
use App\Mapping;
use App\order;
use App\master;
use App\price;
use App\sku;
use App\plu;
use App\user;
use DB;

class MappingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $pro = DB::table('masters')
        ->select('masters.*','plus.*','skus.*','prices.*')
        ->join('plus', 'masters.idplu', '=', 'plus.idplu')
        ->join('skus', 'masters.idsku', '=', 'skus.idsku')
        ->join('prices', 'masters.idsku', '=', 'prices.idsku')
        ->get();

        return view('mappingcode.index', compact('pro'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $mapping = DB::table('masters')
        ->select('masters.*','plus.*','skus.*')
        ->join('plus', 'masters.idplu', '=', 'plus.idplu')
        ->join('skus', 'masters.idsku', '=', 'skus.idsku')
        ->get();

        $plus = DB::table('plus')
        ->select('plus.*')
        ->orderBy('idplu', 'DESC')
        ->get();
        $skus = DB::table('skus')
        ->select('skus.*')
        ->orderBy('idsku', 'DESC')
        ->get();
        $types = DB::table('product_types')
        ->select('product_types.*')
        ->orderBy('idtype', 'DESC')
        ->get();


    return view('mappingcode.create', compact('mapping','plus','skus','types'));
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

    //   echo $request->get('idplu');
    //   echo $request->get('idsku');
    //   echo $request->get('idtype');
    //   echo $request->get('price');

      $request->validate([
        'idplu'=>'required',
        'idplu'=>'required',
        'idtype'=>'required',
        'idprice'=>'required'
    ]);

    $contact2 = new price([
        'idplu' => $request->get('idplu'),
        'idsku' => $request->get('idsku'),
        'price' => $request->get('price')
    ]);

    $contact2->save();

    $contact = new master([
        'idplu' => $request->get('idplu'),
        'idsku' => $request->get('idsku'),
        'idprice' => $request->get('idprice'),
        'idbranch' => $request->get('idbranch'),
        'iduser' => $request->get('idbranch'),
    ]);
    $contact->save();

    return redirect('/mappingcode')->with('success', 'Mapping Code ');



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mapping  $mapping
     * @return \Illuminate\Http\Response
     */
    public function show(Mapping $mapping)
    {
        //
    }


    public function mappingcode_edit(Mapping $mapping)
    {

    $code = DB::table('masters')
    ->select('masters.*')
    ->orderBy('idplu', 'DESC')
    ->get();


    return view('mappingcode.mappingcode_edit', compact('code'));
    }


    public function edit(Mapping $mapping)
    {
    
        $set =  master_product::find($id)
        ->select('master_products.*','plu_codes.*','sku_codes.*','price_plu_code.*')
        ->join('plu_codes', 'master_products.id_plu', '=', 'plu_codes.id_plu')
        ->join('sku_codes', 'master_products.id_sku', '=', 'sku_codes.id_sku')
        ->join('price_plu_code', 'master_products.plu_code_name', '=', 'price_plu_code.barcode')
        ->where('id', $id)
        ->get();
  
  
        $plu = DB::table('plus')
        ->select('plus.*')
        ->orderBy('idplu', 'DESC')
        ->get();
        $sku = DB::table('skus')
        ->select('skus.*')
        ->orderBy('idsku', 'DESC')
        ->get();
        $types = DB::table('product_types')
        ->select('product_types.*')
        ->orderBy('idtype', 'DESC')
        ->get();
  
        return view('mappingcode.edit', compact('set','plu','sku','types'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mapping  $mapping
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mapping $mapping)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mapping  $mapping
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mapping $mapping)
    {
        //
    }
}
