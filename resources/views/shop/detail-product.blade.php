@extends('master-fr')
@section('title')
{!! $product_detail->title !!}
@endsection
@section('meta')
<meta property="og:url"           content="{{url()->current()}}" />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="{!! $product_detail->title !!}" />
<meta property="og:description"   content="{!! $product_detail->title !!}" />
<meta property="og:image"         content="https://scontent.fhan2-1.fna.fbcdn.net/v/t1.0-9/23844497_1800362690263996_7020076248969463199_n.jpg?oh=d0fd8269aeaac40129f70257df62736d&oe=5A97A7D4" />
@endsection

@section('style')
<style type="text/css">
    /*//Chitiet sanpham*/
img {
  max-width: 100%; }

.preview {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column; }
  @media screen and (max-width: 996px) {
    .preview {
      margin-bottom: 20px; } }

.preview-pic {
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
          flex-grow: 1; }

.preview-thumbnail.nav-tabs {
  border: none;
  margin-top: 15px; }
  .preview-thumbnail.nav-tabs li {
    width: 18%;
    margin-right: 2.5%; }
    .preview-thumbnail.nav-tabs li img {
      max-width: 100%;
      display: block; }
    .preview-thumbnail.nav-tabs li a {
      padding: 0;
      margin: 0; }
    .preview-thumbnail.nav-tabs li:last-of-type {
      margin-right: 0; }

.tab-content {
  overflow: hidden; }
  .tab-content img {
    width: 100%;
    -webkit-animation-name: opacity;
            animation-name: opacity;
    -webkit-animation-duration: .3s;
            animation-duration: .3s; }

.card {
  margin-top: 50px;
  background: #eee;
  padding: 3em;
  line-height: 1.5em; }

@media screen and (min-width: 997px) {
  .wrapper {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex; } }

.details {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column; }

/*.colors {
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
          flex-grow: 1; }*/

.product-title, .price, .sizes, .colors {
  text-transform: UPPERCASE;
  font-weight: bold; }

.checked, .price span {
  color: #ff9f1a; }

.product-title, .rating, .product-description, .price, .vote, .sizes {
  margin-bottom: 15px; }

.product-title {
  margin-top: 0; }

.size {
  margin-right: 10px; }
  .size:first-of-type {
    margin-left: 40px; }

.color {
  display: inline-block;
  vertical-align: middle;
  margin-right: 10px;
  height: 2em;
  width: 2em;
  border-radius: 2px; }
  .color:first-of-type {
    margin-left: 20px; }

.add-to-cart, .like {
  background: #ff9f1a;
  padding: 1.2em 1.5em;
  border: none;
  text-transform: UPPERCASE;
  font-weight: bold;
  color: #fff;
  -webkit-transition: background .3s ease;
          transition: background .3s ease; }
  .add-to-cart:hover, .like:hover {
    background: #b36800;
    color: #fff; }

.not-available {
  text-align: center;
  line-height: 2em; }
  .not-available:before {
    font-family: fontawesome;
    content: "\f00d";
    color: #fff; }

.orange {
  background: #ff9f1a; }

.green {
  background: #85ad00; }

.blue {
  background: #0076ad; }

.tooltip-inner {
  padding: 1.3em; }

@-webkit-keyframes opacity {
  0% {
    opacity: 0;
    -webkit-transform: scale(3);
            transform: scale(3); }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
            transform: scale(1); } }

@keyframes opacity {
  0% {
    opacity: 0;
    -webkit-transform: scale(3);
            transform: scale(3); }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
            transform: scale(1); } }

/*# sourceMappingURL=style.css.map */
/*//Chitiet dươi*/
@import url(https://fonts.googleapis.com/css?family=Lato:400,900,700,300);

.nav-tabs li a{font-family:'Lato', sans-serif;font-weight:700;color:#1b2834;border-radius:0px;margin-right:22.008px;border:1px solid #ebebeb !important;}
.nav-tabs .active a:before{content:"♦";position:absolute;top:15px;left:50%;color:#6a2373;font-size:30px;}
.nav-tabs li a:hover{color:#6a2373 !important;text-decoration:none;}
.nav-tabs .active a:hover{color:#fff !important;}
.nav-tabs .active a{background-color:#6a2373 !important;color:#FFF !important;}
.margin-tops{margin-top:30px;}
.nav-tabs li a:last-child{padding:10px 22px;}
</style>
@endsection
@section('content')
<div class="container">
    <div class="card">
        <div class="container-fliud">
            <div class="wrapper row">
                <div class="preview col-md-6">
                    <div class="preview-pic tab-content">
                        <div class="tab-pane active" id="pic-1">
                            <img src="https://scontent.fhan2-1.fna.fbcdn.net/v/t1.0-9/23844497_1800362690263996_7020076248969463199_n.jpg?oh=d0fd8269aeaac40129f70257df62736d&oe=5A97A7D4" />
                        </div>
                        <div class="tab-pane" id="pic-2">
                            <img src="https://scontent.fhan5-1.fna.fbcdn.net/v/t1.0-9/23517532_1796586463974952_4824817335290821877_n.jpg?oh=034bddade85e773c1f85d216ed19569a&oe=5A965471" />
                        </div>
                        <ul class="preview-thumbnail nav nav-tabs">
                          <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
                          <li><a data-target="#pic-2" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
                        </ul>
                    </div>
                </div>
                <div class="details col-md-6">
                    <h3 class="product-title">{!! $product_detail->title !!}</h3>
                    <p class="product-description">{!! $product_detail->description !!}.</p>
                    <h4 class="price">Giá: <span><?php echo number_format($product_detail->price,0,',','.'); ?>VNĐ</span></h4>
                    
                    {{-- <h5 class="sizes">sizes:
                        <span class="size" data-toggle="tooltip" title="small">s</span>
                        <span class="size" data-toggle="tooltip" title="medium">m</span>
                        <span class="size" data-toggle="tooltip" title="large">l</span>
                        <span class="size" data-toggle="tooltip" title="xtra large">xl</span>
                    </h5>
                    <h5 class="colors">colors:
                        <span class="color orange not-available" data-toggle="tooltip" title="Cam"></span>
                        <span class="color green not-available" data-toggle="tooltip" title="Xanh lá cây"></span>
                        <span class="color blue not-available" data-toggle="tooltip" title="Xanh da trời"></span>
                    </h5> --}}
                    <hr> 
                    <div class="support-ngothoai">
                        <strong class="color-main" style="font-size: 24px;">Hỗ trợ trực tuyến :</strong> <span class="color-red font-weight" style="font-size: 18px;">0985.57.83.87</span>
                        <hr>
                        <div class="skype-ngothoai">
                            <strong class="color-main" style="font-size: 24px;">Skype :</strong><script type="text/javascript" src="https://secure.skypeassets.com/i/scom/js/skype-uri.js"></script>
                            <div id="SkypeButton_Call_cheng94.bn_1">
                             <script type="text/javascript">
                             Skype.ui({
                             "name": "chat",
                             "element": "SkypeButton_Call_cheng94.bn_1",
                             "participants": ["cheng94.bn"],
                             "imageSize": 24
                             });
                             </script>
                            </div>
                        </div>
                        <hr>
                        <div class="text-left d-flex">
                            <p><strong class="color-main" style="font-size: 24px;">Chia sẻ :</strong></p>
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{url()->current()}}" style="flex: 1 1 auto;" class="mx-2 badge text-white default-color-dark"><i class="fa fa-3x fa-facebook-square"></i></a>
                            <a href="https://twitter.com/home?status={{url()->current()}}" style="flex: 1 1 auto;" class="mx-2 badge text-white default-color-dark"><i class="fa fa-3x fa-twitter-square"></i></a>
                            <a href="https://plus.google.com/share?url={{url()->current()}}" style="flex: 1 1 auto;" class="mx-2 badge text-white default-color-dark"><i class="fa fa-3x fa-google"></i></a>
                        </div>
                        <hr>
                    </div>
                    <div class="action">
                        <a href="{{ route('add.to.cart',['id' => $product_detail->id]) }}"  class="add-to-cart btn btn-default" type="button">add to cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="detail-product margin-tops">
    <div class="container">
        <div class="row">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#home">Mô tả</a></li>
                <li><a href="#menu1">Video</a></li>
              </ul>

              <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                  <h3>Mô tả sản phầm</h3>
                  {!! $product_detail->description !!}
                </div>
                <div id="menu1" class="tab-pane fade">
                  <h3>Video</h3>
                  <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
              </div>
        </div>
    </div>
    </section>
<hr>

@endsection
@section('script')
<script>
$(document).ready(function(){
    $(".nav-tabs a").click(function(){
        $(this).tab('show');
    });
});
</script>
<div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

  {{-- button send --}}
 
{{-- end button send --}}
@endsection