@extends('admin.master')
@section('title', 'Danh sách sản phẩm')
@section('main-content')
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Danh sách
        <small>sản phẩm</small>
      </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="box">
                    <div class="box-header">
                      <h3 class="box-title">Danh sách sản phẩm</h3>
                    </div>
                    <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                              <th>STT</th>
                              <th>Ảnh sản phẩm</th>
                              <th>Tên sản phẩm</th>
                              <th>Mô tả ngắn</th>
                              <th>Giá</th>
                              <th>Sửa</th>
                              <th>Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $i=0;?>
                          @foreach($allproduct as $product)
                          <?php $i++ ?>
                            <tr>
                              <td><?php echo $i;?></td>
                              <td><img src="{{url('uploads/posts/'.$product->imgProduct)}}" style="width: 120px;" class="img-responsive"></td>
                              <td>{{$product->title}}</td>
                              <td>{{$product->des_short}}</td>
                              <td>{{$product->price}}</td>
                              <td><a href="{{ route('get-edit-product',['id' => $product->id]) }}" target="_blank" class="btn  btn-success">Sửa</a></td>
                              <td><a href="{{ route('delete-product-shop',['id' => $product->id]) }}" class="btn btn-danger click-delete">Xóa</a></td>
                            </tr>
                             @endforeach
                          </tbody>
                      </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
@section('script')
<script src="{{asset('front-admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('front-admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script>
  $(function () {
    
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
<script type="text/javascript">
jQuery(function($){
    $(".click-delete").click( function(){
        return confirm("Bạn có muốn xóa danh mục này không?");
    });
});
</script>
</script>
@endsection
