@extends('layouts.adminpage')
@section('title', 'PLU')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<div class="col-3"></div>
<div class="col-8" style="border:1px solid #fff;">

<br>
<div class="alert alert-primary" role="alert">
<h3>LIST PLU Code ALL</h3>
</div>
<br>
<input id="myInput" class="float-left" type="text" placeholder="Search..">
<br>
<br>
<table class="table table-hover">
<a href="{{ route('PluCode.create') }}"> <button type="button" class="btn btn-primary float-right">Create PLU CODE</button></a>
<br><br>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">PLU Code</th>
      <th scope="col">Name Product</th>
      <th scope="col"></th>
      <th scope="col"></th>

    </tr>
  </thead>
  <tbody id="myTable">
  @foreach($plu as $key=>$plus)
    <tr>
    <td>{{ $key+1}}</td>
      <td>{{ $plus->plu_code}}</td>
      <td>{{ $plus->plu_code_name}}</td>

      <td><a href="{{ route('PluCode.edit', $plus->id_plu)}}" class="btn btn-warning">Edit</a></td>
      <td>
      <form action="{{ route('PluCode.destroy', $plus->id_plu)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
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