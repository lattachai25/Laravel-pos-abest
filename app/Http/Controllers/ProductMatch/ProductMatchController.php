<?php
namespace App\Http\Controllers\ProductMatch;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\plu_code;
use App\sku_code;
use App\master_product;
use App\type_products;
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
       $pro = DB::table('plu_code')
        ->select('plu_code.*','sku_code.*','price_plu_code.*')
        ->join('sku_code', 'plu_code.id_plu', '=', 'sku_code.id_sku')
        ->join('price_plu_code', 'plu_code.plu_code', '=', 'price_plu_code.plu_code')
        // ->orderBy('id_plu', 'DESC')
        ->get();

        return view('sourcing.Product_match.index2', compact('pro'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $plu_code = DB::table('plu_code')
        ->select('plu_code.*')
        ->orderBy('id_plu', 'DESC')
        ->get();
        $sku_code = DB::table('sku_code')
        ->select('sku_code.*')
        ->orderBy('id_sku', 'DESC')
        ->get();
        $model = DB::table('type_products')
        ->select('type_products.*')
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
            'price1'=>'required',
            'price2' => '',
            'price3'=>'',
            'price4'=>'',
            'model'=>'required'
        ]);
        master_product::create($request->all());

    return redirect('/sourcing/Product_match/index')->with('success', 'ได้ทำการเพิ่ม SKU เรียบร้อยแล้ว');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product_Match  $product_Match
     * @return \Illuminate\Http\Response
     */
    public function show(Product_Match $product_Match)
    {
        $pro = DB::table('plu_code')
        ->select('plu_code.*','sku_code.*','price_plu_code.*')
        ->join('sku_code', 'plu_code.id_plu', '=', 'sku_code.id_sku')
        ->join('price_plu_code', 'plu_code.plu_code', '=', 'price_plu_code.plu_code')
        // ->orderBy('id_plu', 'DESC')
        ->get();

        return view('sourcing.Product_match.index2', compact('pro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product_Match  $product_Match
     * @return \Illuminate\Http\Response
     */
    public function edit($id_plu)
    {

        echo "OK = ".$id_plu;

        $set = plu_code::find($id_plu);
        $set->plu_code = $request->get('plu_code');
        $set->plu_code_name = $request->get('plu_code_name');

        return view('sourcing.Product_match.edit', compact('set'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product_Match  $product_Match
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product_Match $product_Match)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product_Match  $product_Match
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product_Match $product_Match)
    {
        //
    }
}
