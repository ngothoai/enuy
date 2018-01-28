@extends('master-fr')
@section('title')
Custommer SignIn
@endsection
@section('content')
<div class="container">
    <div class="row">
        @if(count($errors)>0)
        <div class="alert alert-danger">
            @foreach($errors->all() as $err)
                {{$err}}<br>
            @endforeach
        </div>
        @endif
        <form action="{{ Route('postsignin')}}" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
            <label>Login</label>
            <input type="text" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Password">
            <button class="btn btn-success">Đăng nhập</button>
        </form>
    </div>
</div>
<hr>
<footer class="bg-dark text-white">
    <div class="text-center py-3 lead">Copyright © 2017 - Ngô Thoại</div>
</footer>
@endsection