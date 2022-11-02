@extends('layout.master')
@section('content')

<h2>Sửa</h2>

<form method="POST" action="{{route('category.update',[$categories->id])}}" enctype= "multipart/form-data" >
    @method('PUT')
    @csrf
  <label for="fname">Tên :</label><br>
  <input type="text" id="fname" name="name" value="{{$categories->name}}"  ><br>
  <label for="lname">Mô tả:</label><br>
  <input type="text" id="lname" name="description" value="{{$categories->description}}"><br><br>
  <input type="submit" value="Submit">
</form>

@endsection
