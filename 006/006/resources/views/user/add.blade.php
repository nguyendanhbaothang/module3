@extends('master')
@section('content')
<h2>Thêm</h2>

<div class="container">
        <form action="{{route('users.store')}}" method = 'post' >
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Tên</label>
          <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">email</label>
          <input type="email" name="email" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">password</label>
            <input type="password" class="form-control" name="password" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">phone</label>
            <input type="number" class="form-control" name="phone" id="exampleInputEmail1" aria-describedby="emailHelp">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>

</div>


@endsection
