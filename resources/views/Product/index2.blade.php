@extends('layouts.adminpage')
@section('title', 'Page Admin')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<div class="col-3"></div>
<div class="col-8" style="border:1px solid #fff;">

<br>
<div class="alert alert-primary" role="alert">
<h3>Edit Code</h3>
</div>
<br>
<input id="myInput" class="float-right" type="text" placeholder="Search..">
<br>
<br>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">PLU Code</th>
      <th scope="col">Name Product By PLU</th>
      <th scope="col">SKU Code</th>
      <th scope="col">Name Product By SKU</th>
      <th scope="col">Price</th>
      <th scope="col">Model</th>
      <th scope="col">Edit</th>
      <!-- <th scope="col">Del</th> -->
    </tr>
  </thead>
  <tbody id="myTable">
  @foreach($pro as $key=>$pros)
    <tr>
    <td>{{ $key+1}}</td>
      <td>{{ $pros->plu_code}}</td>
      <td>{{ $pros->plu_code_name}}</td>
      <td>{{ $pros->sku_code}}</td>
      <td>{{ $pros->sku_code_name}}</td>
      <!-- <td>{{ $pros->price}}</td> -->
      <td>{{ $pros->model}}</td>
      <td><a href="{{ route('ProductMatch.edit', $pros->id)}}" class="btn btn-warning">Edit</a></td>
      <td>
      <!-- <form action="{{ route('ProductMatch.destroy', $pros->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form> -->
      </td>
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