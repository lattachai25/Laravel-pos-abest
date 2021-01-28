@extends('layouts.adminpage')
@section('title', 'Page product')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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

<div class="col-md-3 mb-2 ms-2"></div>
<div class="col-md-8 mb-9 ms-9">

<input id="myInput" type="text" placeholder="Search.." style="float: right;">
<br><br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">SKU</th>
      <th scope="col">Product Name</th>
      <th scope="col">Price</th>
      <th scope="col">Change Price</th>
      <th scope="col">Unit</th>
      <th scope="col">Type</th>
    </tr>
  </thead>
  <tbody id="myTable">
  @foreach($product as $products)
    <tr>
      <th scope="row" width="1%">{{ $products ->id }}</th>
      <td width="2%">{{ $products ->sku }}</td>
      <td width="20%">{{ $products ->name_product }}</td>
      <td width="2%">
      <input type="text" class="form-control" placeholder="Price" name="price" value="{{ $products ->price }}">
      </td>
      <td width="2%">
      <input type="text" class="form-control" placeholder="Change Price" name="change_price" value="{{ $products ->change_price }}">
      </td>
      <td width="2%">{{ $products ->unit }}</td>
      <td width="2%">{{ $products ->name_type }}</td>

    </tr>
    @endforeach
  </tbody>
</table>

<div class="col-12">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">{{ $product->links() }}</div>
        <div class="col-4"></div>
    </div>
</div>


</div>

@endsection