<style>
  li {
    font-size: 14px !important;
  }
</style>

<nav id="sidebar">
  <!-- Sidebar Header-->
  <div class="sidebar-header d-flex align-items-center">
    <div class="avatar"><img src="{{asset(auth()->user()->image)}}" alt="..." class="img-fluid rounded-circle"></div>
    <div class="title">
      <h1 class="h5">{{auth()->user()->name}}</h1>
      <p>{{auth()->user()->group->name}}</p>
    </div>
  </div>
  <span class="heading">Main</span>
  <ul class="list-unstyled">
    <li class="active"><a href="{{route('trangchu')}}"> <i class="icon-home"></i>Home </a></li>
    <li><a href="{{route('category.index')}}"> <i class="icon-grid"></i>Quản lý thể loại </a></li>
    <li><a href="#exampledropdownDropdown" data-toggle="collapse"> <i class="icon-windows"></i>Quản lý sản phẩm</a>
      <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
        <li><a href="{{route('product.index')}}">Danh sách sản phẩm</a></li>
        <li><a href="{{route('product.trash')}}">Thùng rác</a></li>
      </ul>
    </li>
    @can('ViewAny', App\Models\User::class)
    <li><a href="{{route('user.index')}}"> <i class="fa fa-bar-chart"></i>Quản lý nhân viên </a></li>
    @endcan
    <li><a href="{{route('customer.index')}}"> <i class="icon-padnote accent-cell"></i> Quản lý khách hàng </a></li>
    <li> <a href="{{route('order.index')}}"> <i class="icon-chart"></i>Quản lý đơn hàng </a></li>
    <li> <a href="{{route('group.index')}}"> <i class="icon-settings"></i>Trao Quyền </a></li>

</nav>