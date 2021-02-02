@extends('layouts.adminpage')
@section('title', 'Order List')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<div class="col-3"></div>
<div class="col-8" style="border:1px solid #fff;">

<br>
<div class="alert alert-primary" role="alert">
<h3>List Order To Store ALL</h3>
</div>
<br>
<input id="myInput" class="float-left" type="text" placeholder="Search..">
<br>
<br>
<table class="table table-hover">
<!-- <a href=""> <button type="button" class="btn btn-primary float-right">Create PLU CODE</button></a> -->
<br><br>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">SKU Code</th>
      <th scope="col">SKU Name Product</th>
      <th scope="col">PLU Code</th>
      <th scope="col">PLU Name Product</th>
      <th scope="col">Price</th>
      <th scope="col">Model</th>

    </tr>
  </thead>
  <tbody id="myTable">
  @foreach($order as $key=>$orders)
    <tr>
      <th scope="row" style="width:100px;">{{ $key+1}}</th>
      <td> <input type="text" hidden name="sku_code" class="form-control" value="{{ $orders->sku_code}}" style="width:150px;" readonly>{{ $orders->sku_code}} </td>
      <td> <input type="text" hidden name="sku_code_name" class="form-control" value="{{ $orders->sku_code_name}}" readonly>{{ $orders->sku_code_name}} </td>
      <td> <input type="text" hidden name="plu_code" class="form-control" value="{{ $orders->plu_code}}" style="width:150px;" readonly>{{ $orders->plu_code}} </td>
      <td> <input type="text" hidden name="plu_code_name" class="form-control" value="{{ $orders->plu_code_name}}" readonly>{{ $orders->plu_code_name}} </td>
      <td> <input type="text" hidden name="price1" class="form-control" value="{{ $orders->price}}" style="width:100px;">{{ $orders->price}} </td>
      <td> <input type="text" hidden name="model" class="form-control" value="{{ $orders->model}}" style="width:50px;" readonly>{{ $orders->model}} </td>
    </tr>
  @endforeach  
  </tbody>
</table>
   
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