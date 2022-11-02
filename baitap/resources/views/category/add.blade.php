
@extends('layout.master')
@section('content')

<h2>Thêm</h2>

<form action="{{route('category.store')}}" method = 'post'>
    @csrf
  <label for="fname">Tên :</label><br>
  <input type="text" id="fname" name="name" ><br>
  <label for="lname">Mô tả:</label><br>
  <input type="text" id="lname" name="description" ><br><br>
  <input type="submit" value="Submit">
</form>

@endsection
