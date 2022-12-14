@extends('layout.master1')
@section('content')

    <div class="title m-b-md">
        Laravel Session
    </div>

    <div class="links">
        <a href="{{ route('show.login1') }}">
            <button type="button" class="btn btn-outline-primary">Đăng Nhập</button>
        </a>
    </div>
@endsection
