@extends('layouts.adminpage')
@section('title', 'Page Report Partner ')
@section('content')

<div class="col-md-3 mb-2 ms-2"></div>
<div class="col-md-8 mb-9 ms-9" >

<table class="table table-striped">
  <thead>
    <tr>
      <!-- <th scope="col">#</th> -->
      <th scope="col">Code Partner</th>
      <th scope="col">Name</th>
      <th scope="col">ประเภท</th>
      <th scope="col">เบอร์โทร</th>
      <th scope="col">ชื่อผู้ติดต่อ</th>
      <th>
        <td>
          <th scope="col">ผัก</th>
          <th scope="col">ผลไม้ไทย</th>
          <th scope="col">ผลไม้นอก</th>
        </td>
      </th>
      <th scope="col">แก้ไข</th>
      <th scope="col">ลบ</th>
    </tr>
  </thead>
  <tbody>
  @foreach($partner as $partners)
    <tr>
      <!-- <th scope="row">{{ $partners ->id }}</th> -->
      <td>{{ $partners ->id_partner }}</td>
      <td>{{ $partners ->name_part }}</td>
      <td>
          
         @if ($partners ->id_type_part == "1")
            {{"ประจำ"}}
          @else ($partners ->id_type_part == "3")
            {{"ชั่วคราว"}}
          @endif
                
      
      </td>
      <td>{{ $partners ->phone }}</td>
      <td>{{ $partners ->contact_person }}</td>
      <th>
        <td>
          <th>
          <center>
          @if ($partners ->vegetable == "0")
            {{"-"}}
          @elseif ($partners ->vegetable == "1")
            {{"ผัก"}}
          @endif
          </center>
          </th>

          <th>
          <center>
          @if ($partners ->thai_fruits == "0")
            {{"-"}}
          @elseif ($partners ->thai_fruits == "1")
            {{"ไทย"}}
          @endif
          </center>
          </th>

          <th>
          <center>
          @if ($partners ->fruit_outside == "0")
            {{"-"}}
          @elseif ($partners ->fruit_outside == "1")
            {{"นอก"}}
          @endif
          </center>
          </th>
          <!-- <th><center>{{ $partners ->vegetable }}</center></th>
          <th><center>{{ $partners ->thai_fruits }}</center></th>
          <th><center>{{ $partners ->fruit_outside }}</center></th> -->
        </td>
      </th>

      <td><a href="{{ route('SourPartner.edit', $partners->id)}}" class="btn btn-primary">แก้ไข</a></td>
      <td>
      <form action="{{ route('SourPartner.destroy', $partners->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">ลบ</button>
                </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

</div>



@endsection