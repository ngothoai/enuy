<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    @yield('meta')
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{asset('css/mdb.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('style.css')}}">
    @yield('style')
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.3.min.js"></script>

</head>
<body>
@include('frontend.header')
@yield('content')
</body>
<footer class="bg-purple text-white">
    <div class="text-center py-3 lead">Copyright © 2017 - Ngô Thoại</div>
</footer>

<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



    <script src="{{asset('js/mdb.min.js')}}"></script>
    <script src="{{asset('js/jarallax.js')}}"></script>
    <script src="{{asset('js/jarallax-video.js')}}"></script>
    <script>
        new WOW().init();
    </script> 
    <script type="text/javascript" src="{{asset('update-cart.js')}}">
    </script>
@yield('script')
</html>