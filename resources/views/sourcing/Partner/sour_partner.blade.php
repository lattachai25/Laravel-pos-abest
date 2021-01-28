@extends('layouts.adminpage')
@section('title', 'Page sour partner')
@section('content')



<div class="col-md-3 mb-2 ms-2"></div>
<div class="col-md-8 mb-9 ms-9" >
<form action='{{ route('SourPartner.store') }}' method='POST' enctype='multipart/form-data'>
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
      <input type="text" class="form-control" id="id_partner"name="id_partner" required onKeyUp="if(this.value*1!=this.value) this.value='' ;">
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationDefault01">ชื่อ / บริษัท</label>
      <input type="text" class="form-control" id="name_part" name="name_part" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault02">ประเภท</label>
      <select class="custom-select" id="id_type_part" name="id_type_part" required>
        <option selected>--  กรุณาเลือก --</option>

        @foreach($type_partner as $type_partners)
        <option value="{{ $type_partners->partners_name_type  }}">{{ $type_partners->partners_name_type  }}</option>
        @endforeach

      </select>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-3 mb-3">
      <label for="validationDefault03">เบอร์โทร</label>
      <input type="text" class="form-control" id="phone" name="phone" >
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault05">ชื่อผู้ติดต่อ</label>
      <input type="text" class="form-control" id="contact_person" name="contact_person" >
    </div>

<div class="col-12">
<div class="alert alert-primary" role="alert">
  กรุณากรอกข้อมูลของ
</div>
</div>
    <div class="col-md-12 mb-12" style="border:1px solid #909090; border-radius: 10px; min-height:100px; padding:20px">
        @foreach($type_product as $type_products)
        <div class="form-check form-check-inline col-md-12 mb-12">
        <input class="form-check-input" type="checkbox" id="{{ $type_products->id_namebox  }}" name="{{ $type_products->id_namebox }}" value="{{ $type_products->id  }}">
        <label class="form-check-label" for="inlineCheckbox1">{{ $type_products->name_type  }}</label>
        </div>
        @endforeach
      
    </div>

<input type="text" hidden  class="form-control" id="status" name="status" value="1">
        



  </div>
<center>
<button class="btn btn-primary" type="submit">บันทึก</button>
<button class="btn btn-danger" type="submit">ยกเลิก</button>
</center>
  
</form>
</div>


@endsection
