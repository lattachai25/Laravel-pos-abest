<?php
namespace App\Http\Controllers\plu_code;

use App\plu_code;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class PluCodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plu = DB::table('plu_codes')
        ->select('plu_codes.*')
        // ->join('plu_code', 'master_products.id_plu', '=', 'plu_code.id_plu')
        // ->join('sku_code', 'master_products.id_sku', '=', 'sku_code.id_sku')
        ->get();
        return view('sourcing.plu_code.index', compact('plu'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('sourcing.plu_code.create');
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
            'plu_code' => 'required',
            'plu_code_name' => 'required'
        ]);
    
        $contact = new plu_code ([
            'plu_code' => $request->get('plu_code'),
            'plu_code_name' => $request->get('plu_code_name')
        ]);
        $contact->save();
        return redirect('/PluCode')->with('success', 'Contact PLU CODE!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\plu_code  $plu_code
     * @return \Illuminate\Http\Response
     */
    public function show(plu_code $plu_code)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\plu_code  $plu_code
     * @return \Illuminate\Http\Response
     */
    public function edit($id_plu)
    {

         $plu = DB::table('plu_codes')
        ->select('plu_codes.*')
        ->where('id_plu', $id_plu)
        ->get();

       return view('sourcing.plu_code.edit', compact('plu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\plu_code  $plu_code
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_plu)
    {
        //
    $validatedData = $request->validate([
        'plu_code'=>'required',
        'plu_code_name'=>'required'
    ]);
    plu_code::whereId($id_plu)->update($validatedData);

    // return redirect('/PluCode')->with('success', 'Contact updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\plu_code  $plu_code
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_plu)
    {
        $contact = DB::table('plu_codes')
        ->select('plu_codes.*')
        ->where('id_plu', $id_plu)
        ->delete();

        return redirect('/PluCode')->with('success', 'Delete PLU TO SKU!');
    }
}
