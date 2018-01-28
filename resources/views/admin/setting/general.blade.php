@extends('admin.master')
@section('title', 'Cài đặt chung')
@section('style')
    <link rel="stylesheet" type="text/css" href="{{url('multiselect/css/stylesheet.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('multiselect/css/selectize.bootstrap3.css')}}">
@endsection
@section('main-content')
  <div class="content-wrapper" >
    <section class="content-header">
      <h1>
        Cài đặt chung
      </h1>
    </section>
    
   <form action="{{ route('setup-menu-one') }}" enctype="multipart/form-data" method="POST">
    <section class="content">
        <h3>Cài đặt menu dọc 1</h3>
        <div class="row">
           <div class="col-xs-12 col-sm-9 col-md-9">
              <div class="box">
                    <div class="box-body" id="wrapper">
                       <div class="form-group">
                          <label>Lựa chọn danh mục</label>
                          <div class="control-label category-container">
                                <select name="category[]" class="form-control " style="display: inline-block;width: 70%">
                                  <option value="1">Hoa oải hương</option>
                              </select>
                            <a class="remove-item btn btn-warning">Xóa</a>
                            
                          </div>
                          
                          <a class="add-item-menu btn btn-success">Thêm vào menu</a>
                        </div>
                    </div>
              </div>
           </div>
        </div>
    </section>
    </form>
</div>
@endsection
@section('script')
<script type="text/javascript">
var template = '<div class="control-label category-container">'+
                  '<select name="category[]" class="form-control " style="display: inline-block;width: 70%">'+
                      '<option value="1">Hoa oải hương</option>'+
                  '</select>'+
                '<a class="remove-item btn btn-warning">Xóa</a>'+
              '</div>';
    $('.add-item-menu').on('click', function(e){
        e.preventDefault();
        $(this).before(template);
    });
    $(document).on('click', '.remove-item',function(e){
        e.preventDefault();
        $(this).parents('.category-container').remove();
    });
</script>
@endsection



