@extends('master-fr')
@section('title')
Tài khoản của tôi
@endsection
@section('content')

<style type="text/css">
    .icon-cart{
        background: #f36f36 !important;
        color: #fff;
        height: 70px;
        min-width: 260px;
        line-height: 24px;
        font-size: 16px;
        overflow: hidden;
        -webkit-backface-visibility: hidden;
        -moz-backface-visibility: hidden;
        backface-visibility: hidden;
    }
    .btn {
    border: none;
    font-family: inherit;
    font-size: inherit;
    color: inherit;
    background: none;
    cursor: pointer;
    padding: 24px;
    display: inline-block;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-weight: 700;
    outline: none;
    position: relative;
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    transition: all 0.3s;
}
.btn-5 span.text-code {
    display: inline-block;
    width: 100%;
    height: 100%;
    -webkit-transition: all 0.3s;
    -webkit-backface-visibility: hidden;
    -moz-transition: all 0.3s;
    -moz-backface-visibility: hidden;
    transition: all 0.3s;
    backface-visibility: hidden;
}
.btn-5 span.code {
    position: absolute;
    height: 100%;
    width: 100%;
    line-height: 2.5;
    font-size: 180%;
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    transition: all 0.3s;
    left: 0;
    top: -100%;
}
.btn:hover span.text-code {
   -webkit-transform: translateY(300%);
    -moz-transform: translateY(300%);
    -ms-transform: translateY(300%);
    transform: translateY(300%);
}
.btn:hover span.code{
    top: 0px;
    position: absolute;
    height: 100%;
    width: 100%;
    line-height: 2.5;
    font-size: 180%;
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    transition: all 0.3s;
}
</style>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <h1>Tài khoản của tôi</h1>
            <button class="btn btn-5 btn-5a icon-cart" style="position: relative;">
            
            <span class="code">080494</span>
            <span class="text-code">Mã giảm giá</span>
             </button>

        </div>
    </div>
</div>
<hr>
<footer class="bg-dark text-white">
    <div class="text-center py-3 lead">Copyright © 2017 - Ngô Thoại</div>
</footer>
@endsection