@extends('layout.master')
@section('content')

<a class="btn btn-primary" href="{{route('category.create')}}">Thêm </a>

<table class="table">

    <thead>
      <tr>
        <th scope="col">Số thứ tự</th>
        <th scope="col">Tên</th>
        <th scope="col">Mô Tả</th>
        <th scope="col">Quản lý</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($categories as $key => $team)
        <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{$team->name}}</td>
            <td>{{$team->description}}</td>
            <td>
                <form action="{{route('category.destroy',[$team->id])}}" method="post">
                    @method('DELETE')
                    @csrf
                    <button onclick="return confirm('Bạn có muốn xóa truyện này không?');" class="btn btn-danger">Xóa</button>
                    </form>
                <a href="{{route('category.edit',[$team->id])}}" class="btn btn-primary">Sửa</a>

            </td>
          </tr>
@endforeach


    </tbody>
  </table>

@endsection
