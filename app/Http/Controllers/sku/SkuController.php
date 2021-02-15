<?php

namespace App\Http\Controllers\sku;

use App\sku;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SkuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sku = sku::paginate(50);
        return view('sku.index', compact('sku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('sku.create', compact('sku'));
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
    //    echo $request->get('codesku');
    //    echo $request->get('skunamecode');

    $request->validate([
        'codesku'=>'required',
        'skunamecode'=>'required'
    ]);

    $contact = new sku([
        'codesku' => $request->get('codesku'),
        'skunamecode' => $request->get('skunamecode')
    ]);

    $contact->save();

    return redirect('/sku')->with('success', 'SKU Code ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\sku  $sku
     * @return \Illuminate\Http\Response
     */
    public function show(sku $sku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\sku  $sku
     * @return \Illuminate\Http\Response
     */
    public function edit(sku $sku)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\sku  $sku
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sku $sku)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\sku  $sku
     * @return \Illuminate\Http\Response
     */
    public function destroy(sku $sku)
    {
        //
    }
}
