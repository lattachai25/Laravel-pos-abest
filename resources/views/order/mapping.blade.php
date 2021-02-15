@extends('layouts.adminpage')
@section('title', 'Mapping Branch')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="col-3"></div>
<div class="col-8">
<br><br>
<div class="alert alert-primary" role="alert">
  <h3> Mapping Branch </h3>
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
      <td scope="col"></td>
      <th scope="col">Qty</th>
      <td scope="col"></td>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <form action="{{ route('postData') }}" method='POST' enctype='multipart/form-data'>
  @csrf
  <button type="submit" class="btn btn-primary float-right">Submit</button>
  <br><br><br>
  <tbody id="myTable">
  
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