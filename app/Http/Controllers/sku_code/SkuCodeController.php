<?php

namespace App\Http\Controllers\sku_code;

use App\sku_code;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class SkuCodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sku = DB::table('sku_codes')
        ->select('sku_codes.*')
        // ->join('plu_code', 'master_products.id_plu', '=', 'plu_code.id_plu')
        // ->join('sku_code', 'master_products.id_sku', '=', 'sku_code.id_sku')
        ->get();
        return view('sourcing.sku_code.index', compact('sku'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('sourcing.sku_code.create');
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
        
        $request->validate([
            'sku_code' => 'required',
            'sku_code_name' => 'required'
        ]);
    
        $contact = new sku_code ([
            'sku_code' => $request->get('sku_code'),
            'sku_code_name' => $request->get('sku_code_name')
        ]);
        $contact->save();
        return redirect('/SkuCode')->with('success', 'Contact SKU CODE!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\sku_code  $sku_code
     * @return \Illuminate\Http\Response
     */
    public function show(sku_code $sku_code)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\sku_code  $sku_code
     * @return \Illuminate\Http\Response
     */
    public function edit(sku_code $sku_code, $id_sku)
    {
        //
        $sku = DB::table('sku_codes')
        ->select('sku_codes.*')
        ->where('id_sku', $id_sku)
        ->get();

       return view('sourcing.sku_code.edit', compact('sku'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\sku_code  $sku_code
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sku_code $sku_code)
    {
        //
        $request->validate([
            'plu_code'=>'required',
            'plu_code_name'=>'required'
        ]);

     $contact = plu_code::find($id_plu);
    // $contact->plu_code =  $request->get('plu_code');
    // $contact->plu_code_name = $request->get('plu_code_name');
    // $contact->save();

        // return redirect('/PluCode')->with('success', 'Contact updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\sku_code  $sku_code
     * @return \Illuminate\Http\Response
     */
    public function destroy(sku_code $id_sku)
    {
        //
        $contact = DB::table('sku_codes')
        ->select('sku_codes.*')
        ->where('id_sku', $id_sku)
        ->delete();

        return redirect('/SkuCode')->with('success', 'Delete Sku TO SKU!');
    }
}
