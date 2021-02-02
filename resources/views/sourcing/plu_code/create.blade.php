@extends('layouts.adminpage')
@section('title', 'ADD PLU')
@section('content')


<div class="col-3"></div>
<div class="col-8" style="border:1px solid #FFF;">
<br>
<div class="alert alert-primary" role="alert">
 <h3>Add PLU Code </h3>
</div>
<br>

<form action="{{ route('PluCode.store') }}" method='POST' enctype='multipart/form-data'>
@csrf
<div class="row">
  <div class="form-group col-6">
    <label for="exampleFormControlInput1">PLU CODE</label>
    <input type="text" class="form-control" name="plu_code" placeholder="Please enter letters only.">
  </div>

  <div class="form-group col-6">
      <label for="exampleFormControlInput1">Name Product</label>
      <input type="text" class="form-control" name="plu_code_name" placeholder="Please enter letters only.">
  </div>
</div>
<center>
<button type="submit" class="btn btn-success">Submit</button>
<a href="{{ route('PluCode.index')}}" class="btn btn-danger">Cancel</a>
</center>
  
</form>
</div>
@endsection