@extends('layouts.adminpage')
@section('title', 'Order Create')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="col-3"></div>
<div class="col-8">
<br>
<div class="alert alert-primary" role="alert">
 <h3>Create Order To Store</h3>
</div>
<br>

<form action="{{ route('Order.store') }}" method='POST' enctype='multipart/form-data'>
@csrf
<div class="row">
<div class="col-11"><input id="myInput" class="float-right" type="text" placeholder="Search.."></div>
<div class="col-1"> <button type="submit" class="btn btn-primary">Submit</button> </div>

<table class="table" style="margin-top:30px;">
  <thead>
    <tr>
      <th scope="col" style="width:10px;">#</th>
      <th scope="col">CheckBox</th>
      <th scope="col">SKU Code</th>
      <th scope="col">SKU Name</th>
      <th scope="col">PLU Code</th>
      <th scope="col">PLU Name</th>
      <th scope="col">Selling Price</th>
      <th scope="col">Model</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody id="myTable">
  @foreach($order as $key=>$orders)
    <tr>
      <th scope="row" style="width:10px;">{{ $key+1}}</th>
      <td> <center><input type="checkbox" class="form-check-input" name="checkbox{{ $orders->id}}"  value="checkbox{{ $orders->id}}"> </center> </td>
      <td> <input type="text" hidden name="sku_code" class="form-control" value="{{ $orders->sku_code}}" style="width:150px;" readonly>{{ $orders->sku_code}} </td>
      <td> <input type="text" hidden name="sku_code_name" class="form-control" value="{{ $orders->sku_code_name}}" readonly>{{ $orders->sku_code_name}} </td>
      <td> <input type="text" hidden name="plu_code" class="form-control" value="{{ $orders->plu_code}}" style="width:150px;" readonly>{{ $orders->plu_code}} </td>
      <td> <input type="text" hidden name="plu_code_name" class="form-control" value="{{ $orders->plu_code_name}}" readonly>{{ $orders->plu_code_name}} </td>
      <td> <input type="text" name="price" class="form-control" value="{{ $orders->price}}" style="width:100px;"></td>
      <td> <input type="text" hidden name="model" class="form-control" value="{{ $orders->model}}" style="width:50px;" readonly>{{ $orders->model}} </td>
    </tr>
  @endforeach  
  </tbody>
</table>

</div>

</form>
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