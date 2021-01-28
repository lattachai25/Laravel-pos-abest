@extends('layouts.adminpage')
@section('title', 'Page sour partner')
@section('content')

<div class="col-md-3 mb-2 ms-2">

</div>
<div class="col-md-8 mb-9 ms-9" >
@if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
<form action="{{ route('SourPartner.update', $partner->id) }}" method='POST' enctype='multipart/form-data'>
@method('PATCH')
@csrf

<br>
<div class="alert alert-primary">
<center>
  <h2> กรุณากรอกข้อมูลของ Partner </h2>  
</center>
</div>
<br>

  <div class="form-row">
  <div class="col-md-3 mb-3">
      <label for="validationDefault02">ID Partner</label>
      <input type="text" class="form-control" id="id_partner" name="id_partner" value="{{ $partner->id_partner }}">
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationDefault01">ชื่อ / บริษัท</label>
      <input type="text" class="form-control" id="name_part" name="name_part" value="{{ $partner->name_part }}">
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault02">ประเภท</label>
      <select class="custom-select" id="id_type_part" name="id_type_part">
        <option selected>{{ $partner->id_type_part }}</option>
        <option value="2">ชั่วคราว</option>
      </select>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-3 mb-3">
      <label for="validationDefault03">เบอร์โทร</label>
      <input type="text" class="form-control" id="phone" name="phone" value="{{ $partner->phone }}">
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault05">ชื่อผู้ติดต่อ</label>
      <input type="text" class="form-control" id="contact_person" name="contact_person" value="{{ $partner->contact_person }}">
    </div>

<div class="col-12">
<div class="alert alert-primary" role="alert">
  กรุณากรอกข้อมูลของ
</div>
</div>
    <div class="col-md-12 mb-12" style="border:1px solid #909090; border-radius: 10px; min-height:100px; padding:20px">
      


@if ($partner->vegetable == "0")

       <div class="form-check form-check-inline col-md-12 mb-12">
        <input class="form-check-input" type="checkbox" id="vegetable" name="vegetable" value="0" >
        <label class="form-check-label" for="inlineCheckbox1">ผัก</label>
        </div>   
@else ($partner->vegetable  == "1")
        <div class="form-check form-check-inline col-md-12 mb-12">
        <input class="form-check-input" type="checkbox" id="vegetable" name="vegetable" value="1" checked >
        <label class="form-check-label" for="inlineCheckbox1">ผัก</label>
        </div> 
@endif
                


@if ($partner->thai_fruits == "0")
        <div class="form-check form-check-inline col-md-12 mb-12">
        <input class="form-check-input" type="checkbox" id="thai_fruits" name="thai_fruits" value="0">
        <label class="form-check-label" for="inlineCheckbox2">ผลไม้ไทย</label>
        </div> 
@else ($partner->thai_fruits  == "1")
        <div class="form-check form-check-inline col-md-12 mb-12">
        <input class="form-check-input" type="checkbox" id="thai_fruits" name="thai_fruits" value="1" checked>
        <label class="form-check-label" for="inlineCheckbox2">ผลไม้ไทย</label>
        </div>
@endif


@if ($partner->fruit_outside == "0")
        <div class="form-check form-check-inline col-md-12 mb-12">
        <input class="form-check-input" type="checkbox" id="fruit_outside" name="fruit_outside" value="0">
        <label class="form-check-label" for="inlineCheckbox3">ผลไม้นอก</label>
        </div> 
@else ($partner->fruit_outside  == "1")
        <div class="form-check form-check-inline col-md-12 mb-12">
        <input class="form-check-input" type="checkbox" id="fruit_outside" name="fruit_outside" value="1" checked>
        <label class="form-check-label" for="inlineCheckbox3">ผลไม้นอก</label>
        </div>
@endif





        <!-- <div class="form-check form-check-inline col-md-12 mb-12">
        <input class="form-check-input" type="checkbox" id="thai_fruits" name="thai_fruits" value="1">
        <label class="form-check-label" for="inlineCheckbox2">ผลไม้ไทย</label>
        </div>

        <div class="form-check form-check-inline col-md-12 mb-12">
        <input class="form-check-input" type="checkbox" id="fruit_outside" name="fruit_outside" value="1">
        <label class="form-check-label" for="inlineCheckbox2">ผลไม้นอก</label>
        </div> -->

        </div>

       <input type="text" hidden  class="form-control" id="status" name="status" value="1">
        



  </div>
<center>
<button class="btn btn-primary" type="submit">บันทึก</button>

<a href="{{ route('SourPartner.index')}}" class="btn btn-danger">ยกเลิก</a>

</center>
  
</form>













</div>
@endsection