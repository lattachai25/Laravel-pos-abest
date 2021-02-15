@extends('layouts.adminpage')
@section('title', 'Page PLU')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="col-3"></div>
<div class="col-8">
<br><br>
<div class="alert alert-primary" role="alert">
  <h3>List Mapping Barcode</h3>
</div>
<br>
  <input id="myInput" class="float-left" type="text" placeholder="Search..">
<br>
<br>
<table class="table table-striped">
  <thead>
    <tr style="background-color:#B8B6B6;">
      <th scope="col">#</th>
      <th scope="col">PLU</th>
      <th scope="col">PLU Product</th>
      <th scope="col">SKU</th>
      <th scope="col">SKU Product</th>
      <th scope="col">Price</th>
      <th scope="col">Qty</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <form action="" method='POST' enctype='multipart/form-data'>
  @csrf
  <button type="submit" class="btn btn-primary float-right">Submit</button>
  <br><br><br>
  <tbody id="myTable">
  @foreach($code as $key=>$codes)
    <tr>
      <th scope="row">1</th>
      <td>{{ $codes->idplu}}</td>
      <td>{{ $codes->idsku}}</td>
      <td>{{ $codes->idprice}}</td>
      <td>{{ $codes->idbranch}}</td>
      <td>{{ $codes->iduser}}</td>
    </tr>
  @endforeach
  </tbody>
  </form>
</table>
<br>
</div>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
@endsection