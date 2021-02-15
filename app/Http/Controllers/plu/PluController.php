<?php

namespace App\Http\Controllers\plu;

use App\plu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PluController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $plu = plu::all();
        $plu = plu::paginate(50);
        return view('plu.index', compact('plu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('plu.create', compact('plu'));
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
        echo $request->get('codeplu');
        echo $request->get('plunamecode');

    $request->validate([
        'codeplu'=>'required',
        'plunamecode'=>'required'
    ]);

    $contact = new plu([
        'codeplu' => $request->get('codeplu'),
        'plunamecode' => $request->get('plunamecode')
    ]);

    $contact->save();

    return redirect('/plu')->with('success', 'PLU Code ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\plu  $plu
     * @return \Illuminate\Http\Response
     */
    public function show(plu $plu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\plu  $plu
     * @return \Illuminate\Http\Response
     */
    public function edit(plu $plu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\plu  $plu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, plu $plu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\plu  $plu
     * @return \Illuminate\Http\Response
     */
    public function destroy(plu $plu)
    {
        //
    }
}
