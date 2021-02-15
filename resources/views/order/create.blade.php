@extends('layouts.adminpage')
@section('title', 'Page PLU')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="col-3"></div>
<div class="col-8">
<br><br>
<div class="alert alert-primary" role="alert">
  <h3> List Item To Branch </h3>
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
  @foreach($order as $key=>$orders)
    <tr>
      <td><input type="text" name="key[]" hidden  value="{{ $key }}" maxlength="8" size="8">{{ $key+1}}</td>
      <td><input type="text" name="idplu[]" hidden value="{{ $orders->idplu}}" maxlength="8" size="8" readonly>{{ $orders->codeplu}}</td>
      <td><input type="text" name="plunamecode[]" hidden value="{{ $orders->plunamecode}}" readonly>{{ $orders->plunamecode}}</td>
      <td><input type="text" name="idsku[]" hidden  value="{{ $orders->idsku}}" maxlength="9" size="9" readonly>{{ $orders->codesku}}</td>
      <td><input type="text" name="skunamecode[]" hidden value="{{ $orders->skunamecode}}" readonly> {{ $orders->skunamecode}}</td>
      <td><input type="text" name="idprice[]" hidden value="{{ $orders->idprice}}" maxlength="4" size="4" readonly> {{ $orders->price}}</td>
      <td><input type="text" name="username[]" hidden value="{{ $orders->skunamecode}}" maxlength="4" size="4" readonly>
      <input type="text" name="day[]" hidden value="{{ date('d-m-Y')}}"></td>
      <td><input type="text" name="qty[]" hidden value="{{ $orders->name_type}}" maxlength="10" size="10" readonly>{{ $orders->name_type}} </td>
      <td><input type="text" name="idbranche[]" hidden value="1" maxlength="4" size="4"></td>
      <td>
        <select class="form-control" name="status[]">
          <option selected value="Active">Active</option>
          <option value="InActive">InActive</option>
          <option value="None">None</option>
        </select>
      </td>
    </tr>
  @endforeach
  </tbody>
  </form>
</table>
<br>
    <div class="d-flex justify-content-center">
    {{ $order->links() }}
    </div>
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