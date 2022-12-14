
@extends('layout.master')
@section('content')

<h2>HTML Forms</h2>

<form action="{{route('blog.store')}}" method = 'post'>
    @csrf
  <label for="fname">Tên :</label><br>
  <input type="text" id="fname" name="name" ><br>
  <label for="lname">Mô tả:</label><br>
  <input type="text" id="lname" name="description" ><br><br>
  <label for="lname">Thể loại:</label><br>
  <input type="text" id="lname" name="category_id" ><br><br>
  {{-- <select name="category_id" id="" class="form-control">
    <option value="">--Vui lòng chọn--</option>
    @foreach ($categories as $category)
        <option value="{{ $category->id }}">{{ $category->name }}</option>
    @endforeach
</select> --}}
  <input type="submit" value="Submit">
</form>

@endsection
