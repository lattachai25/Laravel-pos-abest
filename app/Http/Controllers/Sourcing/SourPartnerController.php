<?php
namespace App\Http\Controllers\Sourcing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\sour_partner;
use App\type_product;
use App\type_partner;
use DB;

class SourPartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    //    echo $type_product = type_product::all();
    //    echo $type_partner = type_partner::all();
        //  $partner = sour_partner::orderBy('id', 'DESC')->get();



        //  $partner = sour_partner::orderBy('id', 'DESC')->get();



         $partner = DB::table('sour_partners')
          ->orderBy('id', 'DESC')

        //  ->join('type_partners', 'sour_partners.id_type_part', '=', 'type_partners.partners_type_id')
        //  ->join('type_products', 'sour_partners.id_type_part', '=', 'type_products.type_number')
        //  ->select('sour_partners.*','type_partners.*','type_products.*')
         ->get();

        return view('sourcing.Partner.report_partner', compact('partner'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $type_product = type_product::all();
        $type_partner = type_partner::all();
        return view('sourcing.Partner.sour_partner', compact('type_product','type_partner'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        sour_partner ::create([
            'id_partner' => $request->input('id_partner'),
            'name_part' => $request->input('name_part'),
            'id_type_part' => $request->input('id_type_part'),
            'phone' => $request->input('phone'),
            'contact_person' => $request->input('contact_person'),
            'vegetable' => $request->input('vegetable'),
            'thai_fruits' => $request->input('thai_fruits'),
            'fruit_outside' => $request->input('fruit_outside'),
            'status' => $request->input('status'),
          ]);
        //   return redirect('SourPartner')->with('success', 'ได้ทำการเพิ่ม เรียบร้อยแล้ว');
          return redirect('SourPartner')->with('success', 'ได้ทำการเพิ่ม เรียบร้อยแล้ว');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\sour_partner  $sour_partner
     * @return \Illuminate\Http\Response
     */
    public function show(sour_partner $sour_partner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\sour_partner  $sour_partner
     * @return \Illuminate\Http\Response
     */
    public function edit(sour_partner $sour_partner, $id)
    {

    $partner = sour_partner::find($id);
    return view('sourcing.Partner.edit_partner', compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\sour_partner  $sour_partner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sour_partner $sour_partner, $id)
    {
        //
        $request->validate([
            'id_partner'=>'required',
            'name_part'=>'required',
            'id_type_part'=>'required',
            // 'phone'=>'required',
            // 'contact_person'=>'required',
            'status'=>'required',
          ]);

          $partner = sour_partner::find($id);
          $partner->id_partner = $request->get('id_partner');
          $partner->name_part = $request->get('name_part');
          $partner->id_type_part = $request->get('id_type_part');
          $partner->phone = $request->get('phone');
          $partner->contact_person = $request->get('contact_person');
          $partner->vegetable = $request->get('vegetable');
          $partner->thai_fruits = $request->get('thai_fruits');
          $partner->fruit_outside = $request->get('fruit_outside');
          $partner->status = $request->get('status');

          $partner->save();

          return redirect('SourPartner')->with('success', 'ได้ทำการเพิ่ม เรียบร้อยแล้ว');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\sour_partner  $sour_partner
     * @return \Illuminate\Http\Response
     */
    public function destroy(sour_partner $sour_partner, $id)
    {
        //


        $partner = sour_partner::find($id);
        $partner->delete();

        return redirect('SourPartner')->with('success', 'ได้ทำการลบ เรียบร้อยแล้ว');
    }
}
