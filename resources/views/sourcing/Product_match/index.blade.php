@extends('layouts.adminpage')
@section('title', 'Product match')
@section('content')

<div class="col-2"></div>
<div class="col-9">
<!-- @foreach($Productmatch as $Productmatchs)
<h1>ID :  {{ $Productmatchs->id}} </h1>
<h1>ID Partner : {{ $Productmatchs->id_partner}} </h1>
<h1>Name Part : {{ $Productmatchs->name_part}} </h1>
<h1>ID Product : {{ $Productmatchs->id_product}} </h1>
<h1>Name Product : {{ $Productmatchs->name_product}} </h1>
<h1>Price : {{ $Productmatchs->price}} </h1>
@endforeach -->

<form>

  <div class="form-group">
    <div class="col-3">
        <label for="name"></label>
        <input type="text" class="form-control" id="name" value="{{ $Productmatchs->name_product}}" />
    </div>  
  </div>


  @foreach($Productmatch as $Productmatchs)

<!-- Media top -->
<div class="media">
  <div class="media-body">
    <h4 class="media-heading">{{ $Productmatchs->name_part}}</h4>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">ชื่อสินค้า</th>
      <th scope="col">ราคาต้น</th>
      <th scope="col">ราคาใหม่</th>
    </tr>
  </thead>

  <tbody>
    <tr>
    
      <th scope="row">{{ 1 }}</th>
      <td>{{ $Productmatchs->name_product}}</td>
      <td>{{ $Productmatchs->price}}</td>
      <td width="200px"><input type="text" class="form-control" id="name" /></td>
    </tr>
  </tbody>

</table>

  </div>
</div>
<!-- Media top -->

@endforeach


<!-- Media top -->
<!-- <div class="media">
  <div class="media-body">
    <h4 class="media-heading">{{ $Productmatchs->name_part}}</h4>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">ชื่อสินค้า</th>
      <th scope="col">ราคาต้น</th>
      <th scope="col">ราคาใหม่</th>
    </tr>
  </thead>

  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>{{ $Productmatchs->name_product}}</td>
      <td>{{ $Productmatchs->price}}</td>
      <td width="200px"><input type="text" class="form-control" id="name" /></td>
    </tr>
  </tbody> -->

</table>

  </div>
</div>
<!-- Media top -->





  <!-- <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>

  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>  
  
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
 -->


<br>
<br>
<br>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>
@endsection