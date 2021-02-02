@extends('layouts.adminpage')
@section('title', 'EDIT PLU')
@section('content')


<div class="col-3"></div>
<div class="col-8" style="border:1px solid #FFF;">
<br>
<div class="alert alert-primary" role="alert">
 <h3>EDIT PLU Code </h3>
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

@foreach($sku as $sku_codes)
<form action="{{ route('SkuCode.update', $sku_codes->id_sku) }}" method='POST' enctype='multipart/form-data'>
@endforeach

@method('PATCH')
@csrf
<div class="row">
@foreach($sku as $sku_codes)

<input type="text" class="form-control" hidden name="id_sku" value="{{ $sku_codes->id_sku }}">
  
  <div class="form-group col-6">
    <label for="exampleFormControlInput1">PLU CODE</label>
    <input type="text" class="form-control" name="plu_code" value="{{ $sku_codes->sku_code}}" placeholder="Please enter letters only.">
  </div>

  <div class="form-group col-6">
    <label for="exampleFormControlInput1">Name Product</label>
    <input type="text" class="form-control" name="plu_code_name" value="{{ $sku_codes->sku_code_name}}" placeholder="Please enter letters only.">
  </div>
@endforeach
</div>
<div class="row">
<div class="col-10
"> </div>
  <div class="col-1">
  <a type="submit" class="btn btn-success float-right">Submit</a>
  </div>
  <div class="col-1">
  <a href="{{ route('SkuCode.index')}}" class="btn btn-danger">Cancel</a>
  </div>
</div>
</form>
</div>
@endsection