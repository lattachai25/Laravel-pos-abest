@extends('layouts.adminpage')
@section('title', 'Product match')
@section('content')


<div class="col-md-3 mb-2 ms-2"></div>
<div class="col-md-8 mb-9 ms-9">


<form>
  <div class="form-row">
  <div class="col-8"> </div>    
    <div class="col-3">
        <select class="form-control">
        @foreach($Sourpartner as $Sourpartners)
        <option>{{ $Sourpartners->name_part}}</option>
        @endforeach
        </select>
    </div>
    <div class="col-1">

<!-- <select id="myInput" onchange="myFunction()">
  <option value="ผัก">ผัก</option>
  <option value="ผลไม้">ผลไม้</option>
</select> -->
        <input type="text" id="myInput" onkeydown="myFunction()"  placeholder="Search for names..">

    </div>
    <div class="col-12">
    <br>
    <br>
    <br>
    </div>
</div>    
<div class="col-12">


<table id="myTable">
      <div class="row">
        
    @foreach($Product as $Products)
        <tr>
            <td style="border:1px solid #000; width:15%;">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
            <label class="form-check-label" for="inlineCheckbox1">{{ $Products ->name_product }}</label>
            </td>
            <td style="border:1px solid #000; width:5%;">{{ $Products ->name_type }}</td>
        </tr>
    @endforeach
    </div>
</table>



    <!-- <div class="row">
        @foreach($Product as $Products)
        <div class="col-3" id="myTable">
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
            <label class="form-check-label" for="inlineCheckbox1">{{ $Products ->name_product }}</label>
            <div style="display: none;"> {{ $Products ->name_type }} </div>
            </div>
        </div>
        @endforeach
    </div> -->
</div>

  </div>
</form>





</div>
<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
@endsection