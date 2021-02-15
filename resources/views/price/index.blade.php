@extends('layouts.adminpage')
@section('title', 'Page PLU')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="col-3"></div>
<div class="col-8">
<br><br>
<div class="alert alert-primary" role="alert">
  <h3> PLU LIST </h3>
</div>
<br>
<table class="table table-striped">
  <thead>
    <tr style="background-color:#B8B6B6;">
      <th scope="col">#</th>
      <th scope="col">Barcode</th>
      <th scope="col">price</th>
    </tr>
  </thead>
  <tbody id="myTable">
  @foreach($price as $key=>$prices)
    <tr>
    <td>{{ $key+1}}</td>
      <td>{{ $prices->codeprice}}</td>
      <td>{{ $prices->pricenamecode}}</td>
    </tr>
  @endforeach
  </tbody>
</table>
<br>
<div class="d-flex justify-content-center">
{{ $price->links() }}
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