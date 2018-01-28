@extends('admin.master')
@section('title', 'Thêm sản phẩm')
@section('main-content')
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Thêm sản phẩm
      </h1>
    </section>
    <form action="{{ route('post-add-product') }}" enctype="multipart/form-data" method="POST">
    <section class="content">
        <div class="row">
           <div class="col-xs-12 col-sm-9 col-md-9">
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
                        
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <label class="control-label" for="inputSuccess">Tên sản phẩm</label>
                            <input type="text" class="form-control"  name="name_product" placeholder="Nhập tên sản phẩm">
                              <hr>
                              <label class="control-label" for="inputSuccess">Mô tả dài</label>
                              <textarea name="description_long" id="demo" class="form-control" rows="5" placeholder="Nhập mô tả dài ..."></textarea>
                              <script type="text/javascript" >
                              var content = CKEDITOR.replace( 'description_long', {
                              filebrowserBrowseUrl: '{{ url('/') }}/ckfinder/ckfinder.html',
                              filebrowserUploadUrl: '{{ url('/') }}/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                              filebrowserImageBrowseUrl : '{{ url('/') }}/ckfinder/ckfinder.html?type=Images',
                              filebrowserImageUploadUrl : '{{ url('/') }}/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                               });
                          </script>
                    </div>
              </div>
           </div>
           <div class="col-xs-12 col-sm-3 col-md-3">
                <div class="box">
                    <div class="box-body">
                        <label class="control-label" for="inputSuccess">Danh mục sản phẩm</label>
                        <select class="form-control" name="id_category">
                            <option value="0">Lựa chọn danh mục</option>
                            @foreach($danhmuc as $cat)
                              <option value="{{ $cat->id}}">{{ $cat->name}}</option>
                            @endforeach
                        </select>
                          <hr>
                        <label class="control-label" for="inputSuccess">Giá</label>
                        <input class="form-control" type="number" name="price_regular">
                        <hr>
                        <label class="control-label" for="inputSuccess">Mô tả ngắn</label>
                        <textarea name="description_short" class="form-control" rows="3" placeholder="Nhập mô tả ngắn ..."></textarea>
                        <hr>
                        <label class="control-label" for="fileInput">Upload Ảnh sản phẩm</label>
                        <div class="controls">
                          <input class="input-file uniform_on" name="img_product" id="fileInput" type="file">
                        </div>
                        <hr>
                        <button type="submmit" class="btn  btn-success">Đăng sản phẩm</button>
                    </div>
                </div>
           </div>
        </div>
    </section>
    </form>
</div>
@endsection


