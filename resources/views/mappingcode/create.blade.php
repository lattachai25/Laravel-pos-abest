@extends('layouts.adminpage')
@section('title', 'Mapping Barcode')
@section('content')
<div class="col-3"></div>
<div class="col-8">
<br><br>
<div class="alert alert-primary" role="alert">
  <h3> Mapping Barcode</h3>
</div>
<form action="{{ route('mappingcode.store') }}" method='POST' enctype='multipart/form-data'>
  @csrf
<div class="form-row">
  <div class="form-group col-3">
  <label for="inputState">PLU</label>
  <select class="form-control form-control-sm" name="idplu">
    @foreach($plus as $key=>$pluss)
        <option value="{{ $pluss->idplu}}">{{ $pluss->codeplu}} | {{ $pluss->plunamecode}}</option>
    @endforeach
  </select>
  </div>

  <div class="form-group col-3">
  <label for="inputState">SKU</label>
  <select class="form-control form-control-sm" name="idsku">
    @foreach($skus as $key=>$skuss)
        <option value="{{ $skuss->idsku}}">{{ $skuss->codesku}} | {{ $skuss->skunamecode}}</option>
    @endforeach
  </select>
  </div>

  <div class="form-group col-3">
  <label for="inputState">Type</label>
  <select class="form-control form-control-sm" name="idtype">
    @foreach($types as $key=>$typess)
        <option value="{{ $typess->idtype }}">{{ $typess->name_type}}</option>
    @endforeach
  </select>
  </div>

  <div class="form-group col-3">
    <label>Sale Price</label> </br>
    <input type="text" name="price">
    <input type="text" hidden name="iduser" value="0">
    <input type="text" hidden name="idprice" value="0">
    <input type="text" hidden name="idbranch" value="0">
  </div>
  <div class="col-9"> </div>

  <div class="form-group col-3">
  <button type="submit" class="btn btn-primary">Save</button>
  <button type="reset" class="btn btn-danger">Reset</button>
  </div>

</div>
</form>


</div>
@endsection