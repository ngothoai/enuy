@extends('admin.master')
@section('title', 'Trang danh mục sản phẩm')
@section('main-content')
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Danh mục
        <small>sản phẩm</small>
      </h1>
    </section>
    <section class="content">
        <div class="row">
           <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
              <div class="box">
                    <div class="box-body">
                        @if(count($errors)>0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $err)
                            {{$err}}<br>
                        @endforeach
                    </div>
                    @endif
                    @if(session('thongbao'))
                    <div class="alert alert-success">
                        {{session('thongbao')}}
                    </div>
                    @endif
                        <form action="{{Route('get-category-product')}}" enctype="multipart/form-data" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <label class="control-label" for="inputSuccess">Tên danh mục</label>
                            <input type="text" class="form-control" name="name_category" placeholder="Nhập tên danh mục">
                            <label class="control-label" for="inputSuccess">Danh mục cha</label>
                            <select class="form-control" name="id_category">
                                <option value="0">Lựa chọn danh mục</option>
                                @foreach($all_cat as $cat)
                                <option value="{{ $cat->id}}">{{ $cat->name}}</option>
                                @endforeach
                              </select>
                              <hr>
                              <button type="submit" class="btn btn-primary">Thêm</button>
                        </form>
                    </div>
              </div>
           </div>
            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                <div class="box">
                    <div class="box-header">
                      <h3 class="box-title">List danh mục sản phẩm</h3>
                    </div>
                    <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                              <th>STT</th>
                              <th>Tên danh mục</th>
                              <th>Sửa</th>
                              <th>Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $i=0;?>
                          @foreach($all_cat as $cat)
                          <?php $i++ ?>
                            <tr>
                              <td><?php echo $i;?></td>
                              <td>{{$cat->name}}</td>
                              <td><a href="{{ route('get-edit-cat-product',['id' => $cat->id]) }}" target="_blank" class="btn  btn-success">Sửa</a></td>
                              <td><a href="{{ route('get-delete-cat-product',['id' => $cat->id]) }}" class="btn btn-danger click-delete">Xóa</a></td>
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
