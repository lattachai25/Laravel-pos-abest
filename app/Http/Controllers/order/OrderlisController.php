<?php
namespace App\Http\Controllers\order;

use App\orderlis;
use App\plu_code;
use App\sku_code;
use App\master_product;
use App\pro_type;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class OrderlisController extends Controller
{

    public function index()
    {
        //
        $order = DB::table('master_products')
        ->select('master_products.*','plu_codes.*','sku_codes.*','price_plu_code.*')
        ->join('plu_codes', 'master_products.id_plu', '=', 'plu_codes.id_plu')
        ->join('sku_codes', 'master_products.id_sku', '=', 'sku_codes.id_sku')
        ->join('price_plu_code', 'master_products.plu_code_name', '=', 'price_plu_code.barcode')
        ->get();
        
        return view('sourcing.order.index', compact('order'));
    }

    public function create()
    {
        //
        $order = DB::table('master_products')
        ->select('master_products.*','plu_codes.*','sku_codes.*','price_plu_code.*')
        ->join('plu_codes', 'master_products.id_plu', '=', 'plu_codes.id_plu')
        ->join('sku_codes', 'master_products.id_sku', '=', 'sku_codes.id_sku')
        ->join('price_plu_code', 'master_products.plu_code_name', '=', 'price_plu_code.barcode')
        ->get();

        return view('sourcing.order.create', compact('order'));
    }

    public function store(Request $request)
    {
        //
    //    echo $id = $request->get('id');
      echo "checkbox". $request->get('id')."<br>";
    //   echo $request->get('plu_code')."<br>";
    //   echo $request->get('plu_code_name')."<br>";
    //   echo $request->get('sku_code')."<br>";
    //   echo $request->get('sku_code_name')."<br>";
    //   echo $request->get('price1')."<br>";
    //   echo $request->get('model')."<br>";

    // return redirect('/ProductMatch')->with('success', 'Contact PLU TO SKU!');
    }

    public function show(orderlis $orderlis)
    {
        //
    }

    public function edit(orderlis $orderlis)
    {
        //
    }


    public function update(Request $request, orderlis $orderlis)
    {
        //
    }

    public function destroy(orderlis $orderlis)
    {
        //
    }
}
