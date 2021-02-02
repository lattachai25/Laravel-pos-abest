<?php
namespace App\Http\Controllers\ProductMatch;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\plu_code;
use App\sku_code;
use App\master_product;
use App\pro_type;
use App\type_and_code;
use DB;

class ProductMatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pro = DB::table('master_products')
        ->select('master_products.*','plu_codes.*','sku_codes.*','price_plu_code.*')
        ->join('plu_codes', 'master_products.id_plu', '=', 'plu_codes.id_plu')
        ->join('sku_codes', 'master_products.id_sku', '=', 'sku_codes.id_sku')
        ->join('price_plu_code', 'master_products.plu_code_name', '=', 'price_plu_code.barcode')
        ->get();

        return view('sourcing.Product_match.index', compact('pro'));
    }


    public function index2()
    {
    $pro = DB::table('master_products')
        ->select('master_products.*','plu_codes.*','sku_codes.*','price_plu_code.*')
        ->join('plu_codes', 'master_products.id_plu', '=', 'plu_codes.id_plu')
        ->join('sku_codes', 'master_products.id_sku', '=', 'sku_codes.id_sku')
        ->join('price_plu_code', 'master_products.plu_code_name', '=', 'price_plu_code.barcode')
        ->get();

        return view('sourcing.Product_match.index2', compact('pro'));
    }



    public function create()
    {
        $plu_code = DB::table('plu_codes')
        ->select('plu_codes.*')
        ->orderBy('id_plu', 'DESC')
        ->get();
        $sku_code = DB::table('sku_codes')
        ->select('sku_codes.*')
        ->orderBy('id_sku', 'DESC')
        ->get();
        $model = DB::table('pro_types')
        ->select('pro_types.*')
        ->orderBy('id', 'DESC')
        ->get();

        return view('sourcing.Product_match.create',compact('plu_code','sku_code','model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    //   echo $request->get('id_plu');
    //   echo $request->get('id_sku');
    //   echo $request->get('plu_code_name');
    //   echo $request->get('price1');
    //   echo $request->get('price2');
    //   echo $request->get('price3');
    //   echo $request->get('price4');


    $request->validate([
        'id_plu'=>'required',
        'id_sku'=>'required',
        'plu_code_name'=>'required',
        'sku_code_name'=>'required'
    ]);

    $contact = new master_product([
        'id_plu' => $request->get('id_plu'),
        'id_sku' => $request->get('id_sku'),
        'plu_code_name' => $request->get('plu_code_name'),
        'sku_code_name' => $request->get('sku_code_name'),
        'price1' => $request->get('price1'),
        'model' => $request->get('model')
    ]);
    $contact->save();
    return redirect('/ProductMatch')->with('success', 'Contact PLU TO SKU!');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Product_Match  $product_Match
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product_Match  $product_Match
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

      $set =  master_product::find($id)
      ->select('master_products.*','plu_codes.*','sku_codes.*','price_plu_code.*')
      ->join('plu_codes', 'master_products.id_plu', '=', 'plu_codes.id_plu')
      ->join('sku_codes', 'master_products.id_sku', '=', 'sku_codes.id_sku')
      ->join('price_plu_code', 'master_products.plu_code_name', '=', 'price_plu_code.barcode')
      ->where('id', $id)
      ->get();


      $plu_code = DB::table('plu_codes')
      ->select('plu_codes.*')
      ->orderBy('id_plu', 'DESC')
      ->get();
      $sku_code = DB::table('sku_codes')
      ->select('sku_codes.*')
      ->orderBy('id_sku', 'DESC')
      ->get();
      $model = DB::table('pro_types')
      ->select('pro_types.*')
      ->orderBy('id', 'DESC')
      ->get();

      return view('sourcing.Product_match.edit', compact('set','plu_code','sku_code','model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product_Match  $product_Match
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


    //   echo $request->get('id_plu'); 
    //   echo $request->get('id_sku');
    //   echo $request->get('plu_code_name');
    //   echo $request->get('price1');
    //   echo $request->get('price2');
    //   echo $request->get('price3');
    //   echo $request->get('price4');


    //   echo $request->validate([
    //         'id'=>'required',
    //         'id_plu'=>'required',
    //         'id_sku'=>'required',
    //         'plu_code_name'=>'required'
    //     ]);
    
            $contact = master_product::find($id);
            $contact->id_plu = $request->get('id_plu');
            $contact->id_sku = $request->get('id_sku');
            $contact->plu_code_name = $request->get('plu_code_name');
            $contact->price = $request->get('price');
            $contact->model = $request->get('model');
 
        $contact->save();
        return redirect('/ProductMatch2')->with('success', 'Update PLU TO SKU!');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product_Match  $product_Match
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = master_product::find($id);
        $contact->delete();

        return redirect('/ProductMatch2')->with('success', 'Delete PLU TO SKU!');
    }
}
