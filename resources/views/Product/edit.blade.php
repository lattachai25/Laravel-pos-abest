@extends('layouts.adminpage')
@section('title', 'Product master Edit')
@section('content')

<div class="col-3"></div>
<div class="col-8" style="border:1px solid #FFF;">
<br>
<div class="alert alert-primary" role="alert">
 <h3>Edit Code</h3>
</div>
<br>

@if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif


@foreach($set as $sets)
<form action="{{ route('ProductMatch.update', $sets->id) }}"  method='POST' enctype='multipart/form-data'>
@endforeach
@method('PATCH')
@csrf

 <div class="row">
 
  <div class="form-group col-3">
    <label for="exampleFormControlSelect1">PLU CODE</label>
    <select class="form-control" id="exampleFormControlSelect1" name="id_plu">
    @foreach($set as $sets)
      <option value="{{ $sets->id_plu }}">{{ $sets->plu_code}}</option>
    @endforeach
    @foreach($plu_code as $plu_codes)
      <option value="{{ $plu_codes->id_plu }}">{{ $plu_codes->plu_code}}</option>
    @endforeach
    </select>
  </div>
  <div class="form-group col-3">
    <label for="exampleFormControlSelect1">SKU CODE</label>
    <select class="form-control" id="exampleFormControlSelect1" name="id_sku">
    @foreach($set as $sets)
      <option value="{{ $sets->id_sku }}">{{ $sets->sku_code}}</option>
    @endforeach
    @foreach($sku_code as $sku_codes)
      <option value="{{ $sku_codes->id_sku }}">{{ $sku_codes->sku_code}}</option>
    @endforeach
    </select>
  </div>
  <div class="form-group col-3">
    <label for="exampleFormControlSelect1">Type Product</label>
    <select class="form-control" id="exampleFormControlSelect1" name="model">
    @foreach($model as $models)
      <option value="{{ $models->id }}">{{ $models->model}}</option>
    @endforeach
    @foreach($sku_code as $sku_codes)
      <option value="{{ $sku_codes->id_sku }}">{{ $sku_codes->sku_code}}</option>
    @endforeach
    </select>
  </div>
  @foreach($set as $sets)
  <div class="form-group col-3">
      <label for="validationDefault05">Product Name</label>
      <input type="text" class="form-control" id="plu_code_name" name="plu_code_name" value="{{ $sets->plu_code}}">
  </div>
  <div class="form-group col-3">
      <label for="validationDefault05">Price</label>
      <input type="text" class="form-control" id="price" name="price" value="{{ $sets->price}}">
  </div>
  </div>
  @endforeach
  <button class="btn btn-primary" type="submit">บันทึก</button>

<a href="{{ route('ProductMatch2.index2')}}" class="btn btn-danger">ยกเลิก</a>

  </div>
  </form>
</div>
@endsection