@extends('layouts.adminpage')
@section('title', 'Product match')
@section('content')


<div class="col-3"></div>
<div class="col-8" style="border:1px solid #FFF;">
<br>
<div class="alert alert-primary" role="alert">
 <h3>Mapping PLU Code To SKU Code width Price </h3>
</div>
<br>

<form action="{{ route('ProductMatch.store') }}" method='POST' enctype='multipart/form-data'>
@csrf
<div class="row">
  <div class="form-group col-6">
    <label for="exampleFormControlSelect1">PLU CODE</label>
    <select class="form-control" id="exampleFormControlSelect1" name="id_plu">
    <option>เลือก PLU CODE</option>
    @foreach($plu_code as $plu_codes)
      <option value="{{ $plu_codes->id_plu }}">{{ $plu_codes->plu_code}}</option>
    @endforeach
    </select>
  </div>
  
  <div class="form-group col-6">
    <label for="exampleFormControlSelect1">Name Product By PLU</label>
    <select class="form-control" id="exampleFormControlSelect1" name="plu_code_name">
    <option>เลือก Name Product</option>
    @foreach($plu_code as $plu_codes)
      <option value="{{ $plu_codes->plu_code_name }}">{{ $plu_codes->plu_code_name}}</option>
    @endforeach
    </select>
  </div>  

  <div class="form-group col-6">
    <label for="exampleFormControlSelect1">SKU CODE</label>
    <select class="form-control" id="exampleFormControlSelect1" name="id_sku">
    <option>เลือก SKU CODE</option>
    @foreach($sku_code as $sku_codes)
      <option value="{{ $sku_codes->id_sku }}">{{ $sku_codes->sku_code}}</option>
    @endforeach
    </select>
  </div>  

  <div class="form-group col-6">
    <label for="exampleFormControlSelect1">Name Product By SKU</label>
    <select class="form-control" id="exampleFormControlSelect1" name="sku_code_name">
    <option>เลือก Name Product</option>
    @foreach($sku_code as $sku_codes)
      <option value="{{ $sku_codes->sku_code_name }}">{{ $sku_codes->sku_code_name}}</option>
    @endforeach
    </select>
  </div>  

  <div class="form-group col-3">
    <label for="exampleFormControlSelect1">Type Product</label>
    <select class="form-control" id="exampleFormControlSelect1" name="model">
    <option>เลือก Type Product</option>
    @foreach($model as $models)
      <option value="{{ $models->model }}">{{ $models->model}}</option>
    @endforeach
    </select>
  </div>  
  <div class="form-group col-3">
    <label for="exampleFormControlInput1">Price</label>
    <input type="text" class="form-control" name="price1" placeholder="Prict">
  </div>

</div>
  <button type="submit" class="btn btn-success float-right">Submit</button>
</form>
</div>
@endsection