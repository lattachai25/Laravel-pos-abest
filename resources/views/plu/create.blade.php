@extends('layouts.adminpage')
@section('title', 'Mapping Barcode')
@section('content')
<div class="col-3"></div>
<div class="col-8">
<br><br>
<div class="alert alert-primary" role="alert">
  <h3> PLU Barcode</h3>
</div>
<form action="{{ route('plu.store') }}" method='POST' enctype='multipart/form-data'>
  @csrf
  <div class="row">
    <div class="col-2"></div>
      <div class="col-8">
        <div class="form-group">
          <label>PLU Barcoce</label> </br>
          <input type="number" class="form-control" name="codeplu" placeholder="PLU Barcoce">
        </div>

        <div class="form-group">
          <label>Name Product</label> </br>
          <textarea class="form-control" name="plunamecode" rows="3"></textarea>
        </div>
    
        <div class="row">
        <div class="form-group col-8" ></div>
        <div class="form-group col-4" >
        <button type="submit" class="btn btn-primary">Save</button>
        <button type="reset" class="btn btn-danger">Reset</button>
        </div>
        </div>
      </div>
    <div class="col-2"></div>
  </div>
</form>


</div>
@endsection