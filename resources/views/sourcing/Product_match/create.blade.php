@extends('layouts.adminpage')
@section('title', 'Product match')
@section('content')


<div class="col-2"></div>
<div class="col-9" style="border:1px solid #FFF;">
<br>
<div class="alert alert-primary" role="alert">
 <h3>Map  PLU Code To SKU Code width Price </h3>
</div>
<br>

<form action="{{ route('ProductMatch.store') }}" method='POST' enctype='multipart/form-data'>
@csrf
  <div class="form-group">
    <label for="exampleFormControlSelect1">PLU CODE</label>
    <select class="form-control" id="exampleFormControlSelect1" name="id_plu">
    <option>เลือก PLU CODE</option>
    @foreach($plu_code as $plu_codes)
      <option value="{{ $plu_codes->id_plu }}">{{ $plu_codes->plu_code}}</option>
    @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">SKU CODE</label>
    <select class="form-control" id="exampleFormControlSelect1" name="id_sku">
    <option>เลือก SKU CODE</option>
    @foreach($sku_code as $sku_codes)
      <option value="{{ $sku_codes->id_sku }}">{{ $sku_codes->sku_code}}</option>
    @endforeach
    </select>
  </div>  

  <div class="form-group">
    <label for="exampleFormControlSelect1">Name Product</label>
    <select class="form-control" id="exampleFormControlSelect1" name="plu_code_name">
    <option>เลือก Name Product</option>
    @foreach($plu_code as $plu_codes)
      <option value="{{ $plu_codes->plu_code_name }}">{{ $plu_codes->plu_code_name}} {{ $sku_codes->sku_code_name}}</option>
    @endforeach
    </select>
  </div>  
  <div class="form-group">
    <label for="exampleFormControlSelect1">Product Type</label>
    <select class="form-control" id="exampleFormControlSelect1" name="model">
    <option>เลือก Type Product</option>
    @foreach($model as $models)
      <option value="{{ $models->model }}">{{ $models->model}}</option>
    @endforeach
    </select>
  </div>  

  <div class="form-group">
    <label for="exampleFormControlInput1">Price1</label>
    <input type="text" class="form-control" name="price1" placeholder="Prict 1">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Price2</label>
    <input type="text" class="form-control" name="price2" placeholder="Prict 2">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Price3</label>
    <input type="text" class="form-control" name="price3" placeholder="Prict 3">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Price4</label>
    <input type="text" class="form-control" name="price4" placeholder="Prict 4">
  </div>
  <button type="submit" class="btn btn-success float-right">Submit</button>

</form>
</div>
@endsection