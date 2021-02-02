@extends('layouts.adminpage')
@section('title', 'EDIT PLU')
@section('content')


<div class="col-3"></div>
<div class="col-8" style="border:1px solid #FFF;">
<br>
<div class="alert alert-primary" role="alert">
 <h3>EDIT PLU Code </h3>
</div>
<br>
@if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif

@foreach($plu as $plu_codes)
<form action="{{ route('PluCode.update', $plu_codes->id_plu) }}" method='POST' enctype='multipart/form-data'>
@endforeach

@method('PATCH')
@csrf
<div class="row">
@foreach($plu as $plu_codes)

<input type="text" class="form-control" hidden name="id_plu" value="{{ $plu_codes->id_plu }}">

  <div class="form-group col-6">
    <label for="exampleFormControlInput1">PLU CODE</label>
    <input type="text" class="form-control" name="plu_code" value="{{ $plu_codes->plu_code}}" placeholder="Please enter letters only.">
  </div>

  <div class="form-group col-6">
    <label for="exampleFormControlInput1">Name Product</label>
    <input type="text" class="form-control" name="plu_code_name" value="{{ $plu_codes->plu_code_name}}" placeholder="Please enter letters only.">
  </div>
@endforeach
</div>
  <button type="submit" class="btn btn-success float-right">Submit</button>
  <a href="{{ route('PluCode.index')}}" class="btn btn-danger float-right">Cancel</a>

</form>
</div>
@endsection