@extends('master')
@section('content')
<h1>Danh sách</h1>
<div class="container">

<a class="btn btn-primary" href="{{route('users.create')}}">Thêm </a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">Số thứ tự</th>
        <th scope="col">Tên</th>
        <th scope="col">Email</th>
        <th scope="col">Mật khẩu</th>
        <th scope="col">Số điện thoại</th>
        <th adta-breakpoints="xs">Quản lí</th>
      </tr>
    </thead>
    <tbody id="myTable">
        @foreach ($users as $key => $team)
        <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{$team->name}}</td>
            <td>{{$team->email }}</td>
            <td>{{$team->password }}</td>
            <td>{{$team->phone }}</td>
            <td>
                    <form action="{{route('users.destroy',[$team->id])}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button onclick="return confirm('Bạn có muốn xóa truyện này không?');" class="btn btn-danger">Xóa</button>
                        <a href="{{route('users.edit',[$team->id])}}" class="btn btn-primary">Sửa</a>
                    </form>
            </td>
          </tr>
@endforeach


    </tbody>
  </table>
</div>
  @endsection
