@extends('layouts.adminpage')
@section('title', 'Page Admin')
@section('content')

<div class="col-md-3"></div>
<div class="col-md-8">
<div class="alert alert-danger" role="alert" style="margin-top:30px; min-height:80px;">
<h4> Dashboard </h4>
</div>



<div class="row">

<div class="col-md-3">
<div class="alert alert-danger" role="alert">
 
  <h4 class="list-group-item-heading count">
    1000</h4>
  <p class="list-group-item-text">
     Profile Views</p>
</div> 
</div>

<div class="col-md-3">
<div class="alert alert-primary" role="alert">

  <h4 class="list-group-item-heading count">
    1000</h4>
  <p class="list-group-item-text">
    Facebook Likes</p>
</div>
</div>

<div class="col-md-3">
<div class="alert alert-success" role="alert">

  <h4 class="list-group-item-heading count">
    1000</h4>
  <p class="list-group-item-text">
    Facebook Likes</p>
</div>
</div>

<div class="col-md-3">
<div class="alert alert-warning" role="alert">

  <h4 class="list-group-item-heading count">
    1000</h4>
  <p class="list-group-item-text">
    Facebook Likes</p>
</div>
</div>


 </div>



<div class="row">

<div class="col-md-4">
  <div class="alert alert-secondary alert-dismissible fade show" role="alert">
    <strong>ยอดขายสินค้า</strong> <br>
     You should check in on some of those fields below.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
</div>

<div class="col-md-4">
  <div class="alert alert-secondary alert-dismissible fade show" role="alert">
    <strong>ประวัติการเข้าชม</strong> <br>
     You should check in on some of those fields below.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
</div>

<div class="col-md-4">
  <div class="alert alert-secondary alert-dismissible fade show" role="alert">
    <strong>ประวัติการใช้งาน</strong> <br>
     You should check in on some of those fields below.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
</div>



</div>



<div class="col-md-12">
<div class="alert alert-secondary alert-dismissible fade show" role="alert">สิถิติ
</div>

<br><br>
<div class="progress">
  <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<br><br>
<div class="progress">
  <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<br><br>
<div class="progress">
  <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<br><br>
<div class="progress">
  <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<br><br>
<div class="progress">
  <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
</div>

</div>























</div>


@endsection
