@extends('admin.master')
@section('title', 'Sửa danh mục sản phẩm')
@section('main-content')
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Sửa danh mục
        <small>{{$show_cat->name}}</small>
      </h1>
    </section>
    <section class="content">
        <div class="row">
           <div class="col-xs-12">
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
                        <form action="{{ route('post-edit-cat-product',['id' => $show_cat->id]) }}" enctype="multipart/form-data" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <label class="control-label" for="inputSuccess">Tên danh mục</label>
                            <input type="text" class="form-control" value="{{$show_cat->name}}" name="name_category" placeholder="Nhập tên danh mục">
                            <label class="control-label" for="inputSuccess">Danh mục cha</label>
                            <select class="form-control" name="id_category">
                                <option value="0">Lựa chọn danh mục</option>
                                @foreach($danhmuc as $cat)
                                @if (($cat->parent_id === $show_cat->parent_id) && ($cat->parent_id !==0 ))
                                  <option selected value="{{ $cat->id}}">{{ $cat->name}}</option>
                                  @else
                                  <option  value="{{ $cat->id}}">{{ $cat->name}}</option>
                                @endif
                                @endforeach
                              </select>
                              <hr>
                              <button type="submit" class="btn btn-primary">Sửa</button>
                        </form>
                    </div>
              </div>
           </div>
        </div>
    </section>
</div>
@endsection

