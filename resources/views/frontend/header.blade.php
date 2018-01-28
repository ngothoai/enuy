<header>
<div class="qc" style="background-color: #cc0000; display: block; z-index: 9999">
    <marquee direction="left"><p style="color: #ffffff;font-weight:600; font-size: 16px;margin: 0px;padding: 4px;">Shop hoa khô xin kính chào quý khách, Đầu năm mới xin chúc quý khách an khang thịnh vượng, nhiều may mắn và tài lộc. Đồng thời nhân dịp này Shop hoa khô có chương trình ưu đãi 10% cho các khách hàng có hóa đơn trên 1 triệu đồng. Số điện thoại Hotline: 0985.57.83.87</p></marquee>
</div>
<nav class="navbar navbar-expand-lg navbar-dark default-color-dark fixed-top">
    <a class="navbar-brand" href="{{url('/')}}">SHOP HOA KHÔ</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="3">Trang chủ</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Giới thiệu</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Hoa khô Lavender</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Túi thơm</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Tinh dầu</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto nav-flex-icons">
            <li class="nav-item">
                 <a class="nav-link waves-effect waves-light" href="{{Route('update.cart')}}" style="font-size: 20px;"><i class="fa fa-shopping-basket"></i> {{Cart::count()}} sản phẩm</a>
            </li>
             @if(!Auth::check())
            <li class="nav-item">
                <a href="{{ route('signin')}}" class="nav-link waves-effect waves-light" style="font-size: 20px;"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Đăng nhập</a>
            </li>
            @endif
            @if(Auth::check())
            <li class="nav-item">
                <a href="{{ route('user.profile')}}" class="nav-link waves-effect waves-light" style="font-size: 20px;"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Tài khoản của tôi</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('user.logout')}}" class="nav-link waves-effect waves-light" style="font-size: 20px;"><i class="fa fa-sign-out" aria-hidden="true"></i> Thoát</a>
            </li>
            @endif
        </ul>
    </div>
</nav>
</header>