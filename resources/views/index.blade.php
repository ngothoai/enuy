@extends('master-fr')
@section('title')
Shoping cart
@endsection
@section('content')

    <div class="view hm-white-light jarallax" data-jarallax='{"speed": 0.2}' data-jarallax-video="https://www.youtube.com/watch?v=0aKZBhA3494">
            <div class="full-bg-img">
                <div class="container flex-center">
                    <div class="row">
                        <div class="col-md-12 wow fadeIn">
                            <div class="text-center">
                                <h1 class="display-2 mb-2 wow fadeInDown" data-wow-delay="0.3s" style="color: #6a2373">SHOP HOA KHÔ</h1>
                                <h5 class="font-up mb-3 mt-1 font-bold wow fadeInDown" data-wow-delay="0.4s" style="color: #6a2373">Chào mừng đến với <br>Shop hoa khô <b>Nơi trao yêu thương</b> cho bạn</h5> 
                                <a class="btn btn-danger btn-lg wow fadeInDown" data-wow-delay="0.4s"><i class="fa fa-diamond"></i> MUA NGAY</a> 
                                <a class="btn btn-primary btn-lg wow fadeInDown" data-wow-delay="0.4s"><i class="fa fa-shield"></i> VÀO CỬA HÀNG</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<div class="py-2"> </div>
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <ul class="list-group">
                <li class="list-group-item active">Lavender</li>
                <li class="list-group-item">Hoa oải hương khô</li>
                <li class="list-group-item">Hoa oải hương tặng bạn</li>
                <li class="list-group-item">Hoa oải hương tặng sinh nhật</li>
                <li class="list-group-item">Hộp quà lavender</li>
            </ul>
            <hr>
            <ul class="list-group">
                <li class="list-group-item active">Tinh dầu lavender</li>
                <li class="list-group-item">Tinh dầu thơm</li>
                <li class="list-group-item">Tinh dầu đốt</li>
                <li class="list-group-item">Tinh dầu tắm</li>
                <li class="list-group-item">Trà lavender</li>
                <li class="list-group-item">Túi thơm</li>
            </ul>
            <hr>
             <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <i class="more-less glyphicon glyphicon-plus"></i>
                                Dịch vụ tư vấn
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                              Hỗ trợ tư vấn miễn phí khách hàng 24/7
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <i class="more-less glyphicon glyphicon-plus"></i>
                                Phương thức đặt hàng
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                            Khách hàng sau khi liên hệ với chúng tôi, gói hàng sẽ được chuyển tới tận tay trong 24h với khách hàng ở nội thành. Khách hàng từ xa có thể nhận được gói hàng trong khoảng thời gian từ 1-3 ngày.
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <i class="more-less glyphicon glyphicon-plus"></i>
                                Cách thức thanh toán
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                            Chấp nhận COD, thanh toán chuyển khoản hoặc tiền mặt
                        </div>
                    </div>
                </div>

            </div><!-- panel-group -->
        </div>
        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-12">
            <div class="row w-row">
                @foreach($products as $product)
                <?php $slug = str_slug($product->title, '-'); ?>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-12 item-ngothoai">
                    <div class="card">
                        <img class="img-fluid" src="{{url('uploads/posts/'.$product->imgProduct)}}" alt="{{$slug}}">
                        <div class="card-body">
                            <h4 class="card-title" ><?php echo excerpt_string($product->title,6); ?></h4>
                            <p class="card-text">Giá: <a class="text-danger"><b><?php echo number_format($product->price,0,',','.'); ?> VNĐ</b></a></p>
                                <div class="text-center d-flex" style=" margin-bottom: 8px;">
                                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ url('san-pham/'.$slug.'/'.$product->id) }}" style="flex: 1 1 auto;" class="mx-2 badge text-white default-color-dark"><i class="fa fa-3x fa-facebook-square"></i></a>
                                    <a href="https://twitter.com/home?status={{ url('san-pham/'.$slug.'/'.$product->id) }}" style="flex: 1 1 auto;" class="mx-2 badge text-white default-color-dark"><i class="fa fa-3x fa-twitter-square"></i></a>
                                    <a href="https://plus.google.com/share?url={{ url('san-pham/'.$slug.'/'.$product->id) }}" style="flex: 1 1 auto;" class="mx-2 badge text-white default-color-dark"><i class="fa fa-3x fa-google"></i></a>
                                </div>
                                
                            <a href="{{ route('add.to.cart',['id' => $product->id]) }}" class="btn btn-primary" title="{{$slug}}">Mua ngay</a>
                            <a href="{{ url('san-pham/'.$slug.'/'.$product->id) }}" class="btn btn-primary">Chi tiết</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
 <script type="text/javascript">


    $(window).load(function() {
      var heights = $(".w-row .item-ngothoai").map(function ()
      {
          return $(this).height();
      }).get(),

      maxHeight = Math.max.apply(null, heights);

      $(".w-row .item-ngothoai").css("height", maxHeight);

    });
</script>
@endsection