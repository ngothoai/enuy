@extends('master-fr')
@section('title')
Giỏ hàng
@endsection
@section('content')

    <div class="view hm-white-light jarallax" data-jarallax='{"speed": 0.2}' data-jarallax-video="https://www.youtube.com/watch?v=syBR4xiikcQ">
            <div class="full-bg-img">
                <div class="container flex-center">
                    <div class="row">
                        <div class="col-md-12 wow fadeIn">
                            <div class="text-center">
                                <h1 class="display-2 mb-2 wow fadeInDown" data-wow-delay="0.3s">LAVENDER SHOP</h1>
                                <h5 class="font-up mb-3 mt-1 font-bold wow fadeInDown" data-wow-delay="0.4s">Giao diện trang chủ <br>Lavender Shop <b>Thiết kế</b> bởi <b>Ngô Huyền Thoại trên nền Laravel</b></h5> 
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
        
        <div class="col-md-offset-1 col-lg-offset-1 col-xl-offset-1 col-xl-10 col-lg-10 col-md-10 col-sm-12 col-xs-12 ">
            
                @if($content)
                        <table id="cart" class="table table-hover table-condensed">
                    <thead>
                        <tr>
                            <th style="width:20%">Ảnh</th>
                            <th style="width:20%">Tên sản phẩm</th>
                            <th style="width:10%">Giá</th>
                            <th style="width:18%">Số lượng</th>
                            <th style="width:22%" class="text-center">Thành tiền</th>
                            <th style="width:10%"></th>
                        </tr>
                    </thead>
                    <tbody>
                    <form method="POST" action="">
                        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                        @foreach($content as $product)
                        <tr>
                            <td data-th="Product">
                                <div class="row">
                                    <div class="col-sm-10">
                                        <h4 class="nomargin"><img src="{{url('uploads/posts/'.$product->options->img)}}" height="100" width="100"></h4>
                                    </div>
                                </div>
                            </td>
                            <td data-th="Product">
                                <div class="row">
                                    <div class="col-sm-10">
                                        <h4 class="nomargin">{!! $product->name !!}</h4>
                                    </div>
                                </div>
                            </td>
                            <td data-th="Price">{!! number_format($product->price,0,",",".") !!}</td>
                            <td data-th="Quantity" class="quantity">
                                <input type="number" name="quantity" class="form-control  qty text-center"  value="{!! $product->qty !!}">
                            </td>
                            <td data-th="Subtotal" class="text-center">{!! number_format($product->price*$product->qty,0,",",".") !!}</td>
                            <td class="actions" data-th="">
                                <a class="btn btn-info btn-sm item-pr" id="{!! $product->rowId !!}"  ><i class="fa fa-refresh"></i></a>
                                <a href="{!! url('xoa-san-pham',['id' => $product->rowId]) !!}" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></a>
                            </td>
                        </tr>
                        @endforeach
                        </form>
                    </tbody>
                    <tfoot>
                        <tr class="visible-xs">
                            <td class="text-center"><strong>3455</strong></td>
                        </tr>
                        <tr>
                            <td><a href="{{Route('allproduct')}}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Tiếp tục mua hàng</a></td>
                            <td colspan="1" class="hidden-xs"></td>
                            <td class="hidden-xs text-center"><strong>Tổng tiền: {!! number_format($total,0,",",".") !!}</strong></td>
                            <td><a href="{{Route('order.cart')}}" class=" btn btn-success btn-block">Đặt hàng <i class="fa fa-angle-right"></i></a></td>
                        </tr>
                    </tfoot>
                </table>

                @else
                <h1>Không có sản phẩm nào trong giỏ hàng</h1>
                 @endif
        </div>
       
    </div>
</div>

<hr>
<footer class="bg-dark text-white">
    <div class="text-center py-3 lead">Copyright © 2017 - Ngô Thoại</div>
</footer>
{{-- <script type="text/javascript">
jQuery(function($){
    $('.qty').bind('input', function() {
        var qtyup  = $(this).val();
        $('.qty_up').val(qtyup);
    });
     $('.qty').bind('input', function() {
        var qtyup  = $(this).val();
        var idup  = $(this).attr('id');
        $('.qty_up').val(qtyup);
        $('.id_up').val(idup);
    });
});

</script> --}}
@endsection