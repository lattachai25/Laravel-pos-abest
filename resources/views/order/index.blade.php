@extends('layouts.adminpage')
@section('title', 'Page PLU')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="col-3"></div>
<div class="col-9">
<br><br>
<div class="alert alert-primary" role="alert">
  <h3>From Order By M1</h3>
</div>
<br>
<form action="{{ route('order_show') }}" method='POST' enctype='multipart/form-data'>
@csrf
<table class="table table-striped">
  <thead>
  <button type="submit" class="btn btn-primary float-right">Calculate </button>
  <br><br><br>
    <tr style="background-color:#B8B6B6;">
      <th scope="col">#</th>
      <!-- <th scope="col">MT</th> -->
      <th scope="col">Barcode</th>
      <th scope="col">NameProduct</th>
      <th scope="col">Unit</th>
      <th scope="col">Order Plan</th>
      <th scope="col">Stock</th>
      <th scope="col">Safety stock</th>
      <th scope="col">Order Unit</th>
      <th scope="col">Unit Type</th>
      <th scope="col">Note</th>

    </tr>
  </thead>
  <tbody id="myTable">
  @foreach($order as $key=>$orders)
    <tr>
    <td width="2%"><input type="text" name="key[]" hidden  value="{{ $key }}">{{ $key+1}}</td>
      <td width="3%"><input type="text" name="barcode[]" hidden value="{{ $orders->codeplu}}" readonly>{{ $orders->codeplu}}</td>
      <td width="20%"><input type="text" name="nameproduct[]" hidden value="{{ $orders->plunamecode}}" readonly>{{ $orders->plunamecode}}</td>
      <td width="3%"><input type="text" name="unit[]" hidden value="{{ $orders->qty}}" readonly>{{ $orders->qty}} </td>
      <td width="11%"><input type="text" id="order_plan" placeholder="0" name="order_plan[]" size="3"></td>
      <td width="11%"><input name="stock[]" id="stock" placeholder="0" type="text" size="3">&nbsp;&nbsp;</td>
      <td width="11%"><input name="safety[]" id="safety" placeholder="0" type="text" size="3">&nbsp;</td>
      <td width="11%"><input name="order[]" id="order" placeholder="0" type="text" size="3"> </td>
      <td width="11%">
      <select class="form-control" name="unit_type[]">
        <option value="ลูก" selected="selected">ลูก</option>
        <option value="กล่อง">กล่อง</option>
        <option value="แพค">แพค</option>
        <option value="ถุง">ถุง</option>
      </select>
      </td>
      <td width="20%">
      <textarea class="form-control" name="order_comment[]" placeholder="comment" rows="2"></textarea></td> 

    </tr>

  @endforeach
  </tbody>
</table>
</form>
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