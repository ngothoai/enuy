  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{url('front-admin/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Ngô Huyền Thoại</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header" style="font-size: 24px;">DASHBOARD</li>
        <li class="treeview">
          <a href="{{url('ch-admin/dashboard')}}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-file"></i>
            <span>Bài viết</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Tất cả bài viết</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Thêm bài viết</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Danh mục bài viết</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Thẻ tags</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-shopping-bag"></i>
            <span>Sản phẩm</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{Route('list-product')}}"><i class="fa fa-circle-o"></i> Tất cả sản phẩm</a></li>
            <li><a href="{{Route('add-product')}}"><i class="fa fa-circle-o"></i> Thêm sản phẩm</a></li>
            <li><a href="{{Route('get-category-product')}}"><i class="fa fa-circle-o"></i> Danh mục sản phẩm</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Thuộc tính</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-upload"></i>
            <span>Ảnh</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Thư viện ảnh</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Thêm ảnh</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-file"></i>
            <span>Trang</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Tất cả trang</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Thêm trang</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-comments"></i>
            <span>Bình luận</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user-circle"></i>
            <span>Tài khoản</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Tất cả tài khoản</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Thêm tài khoản</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Tài khoản của tôi</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-life-ring"></i>
            <span>Cài đặt</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{Route('setting-genneral')}}"><i class="fa fa-circle-o"></i> Tổng quan</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Bài viết</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Trang</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Liên hệ</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-sign-out"></i>
            <span>Thoát</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>