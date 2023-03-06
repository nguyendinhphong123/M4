<style>
li {
  font-size: 14px !important;
}

</style>

<nav id="sidebar">
    <!-- Sidebar Header-->
    <div class="sidebar-header d-flex align-items-center">
      <div class="avatar"><img src="{{asset('admin/img/67232503_1195580353955129_4657063400176615424_n.jpg')}}" alt="..." class="img-fluid rounded-circle"></div>
      <div class="title">
        <h1 class="h5">Nguyễn Đình Phong</h1>
        <p>Lập Trình Viên</p>
      </div>
    </div>
    <span class="heading">Main</span>
    <ul class="list-unstyled">
      <li class="active"><a href="/"> <i class="icon-home"></i>Home </a></li>
      <li><a href="{{route('category.index')}}"> <i class="icon-grid"></i>Quản lý thể loại </a></li>
      <li><a href="#exampledropdownDropdown" data-toggle="collapse"> <i class="icon-windows"></i>Quản lý sản phẩm</a>
        <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
          <li><a href="{{route('product.index')}}">Danh sách sản phẩm</a></li>
          <li><a href="#">Thùng rác</a></li>
        </ul>
      </li>
      <li><a href="charts.html"> <i class="fa fa-bar-chart"></i>Quản lý nhân viên </a></li>
      <li><a href="forms.html"> <i class="icon-padnote accent-cell" ></i> Quản lý khách hàng </a></li>
      <li><a href="forms.html"> <i class="icon-padnote accent-cell" ></i> Quản lý đơn hàng </a></li>
     
      <li><a href="login.html"> <i class="icon-logout"></i>Login page </a></li>
    </ul><span class="heading">Extras</span>
    <ul class="list-unstyled">
      <li> <a href="#"> <i class="icon-settings"></i>Demo </a></li>
      <li> <a href="#"> <i class="icon-writing-whiteboard"></i>Demo </a></li>
      <li> <a href="#"> <i class="icon-chart"></i>Demo </a></li>
    </ul>
  </nav>