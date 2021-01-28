<?php
namespace App\Http\Controllers\ProductMatch;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use plu_code;
use sku_code;
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

        return view('sourcing.Product_match.index', compact('pro'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        // $Productmatch = Product_Match::all();
        // $Sourpartner = sour_partner::all();
        // $Product = product::all();
        // return view('sourcing.Product_match.create', compact('Productmatch','Sourpartner','Product'));
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
     * @param  \App\Product_Match  $product_Match
     * @return \Illuminate\Http\Response
     */
    public function show(Product_Match $product_Match)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product_Match  $product_Match
     * @return \Illuminate\Http\Response
     */
    public function edit(Product_Match $product_Match)
    {
        //
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
