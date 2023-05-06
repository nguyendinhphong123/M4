<section class="top-link clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
              
                <div class="show-mobile hidden-lg hidden-md">
                    <div class="quick-user">
                        <div class="quickaccess-toggle">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="inner-toggle">
                            <ul class="login links">
                                <li>
                                    <a href="/dang-ky.html"><i class="fa fa-sign-in"></i> Đăng ký</a>
                                </li>
                                <li>
                                    <a href="/dang-nhap.html"><i class="fa fa-key"></i> Đăng nhập</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="quick-access">
                        <div class="quickaccess-toggle">
                            <i class="fa fa-list"></i>
                        </div>
                        <div class="inner-toggle">
                            <ul class="links">
                                <li><a id="mobile-wishlist-total" href="/kiem-tra-don-hang.html"
                                        class="wishlist"><i class="fa fa-pencil-square-o"></i> Kiểm tra đơn
                                        hàng</a></li>
                                <li><a href="/gio-hang.html" class="shoppingcart"><i
                                            class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div id="header_main">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-8">
                <!--logo-->

                <h1 class="pull-left">
                    <a href="/" class="logo"
                        title="C&#212;NG TY TNHH PH&#193;T TRIỂN C&#212;NG NGHỆ RUNTIME">
                        <img src="{{asset('shop/Uploads/shop2005/images/logo.png')}}"
                            alt="C&#212;NG TY TNHH PH&#193;T TRIỂN C&#212;NG NGHỆ RUNTIME"
                            title="C&#212;NG TY TNHH PH&#193;T TRIỂN C&#212;NG NGHỆ RUNTIME">
                    </a>
                </h1>

                <!-- end logo -->
            </div>
            <div class="col-lg-6 col-md-5 col-sm-4 hidden-xs">
                <!-- Search -->
                <div class="search_box">
                    <div class="search_wrapper">
                    

                        <form  class="form-inline my-2 my-lg-0" action="{{ route('shop.index') }}" method="GET">
                            @csrf
                            <button  style="float:right" class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm</button>
                              <input style="width: 300px; margin-right: 10px; float:right"  class="form-control" method="GET" name="product" type="text" placeholder="Tìm kiếm theo tên sản phẩm">
              
                              </form>
                    </div>
                </div>
                <!-- End Search -->
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <!-- Cart -->
                <div class="cart_header">
                    <a href="{{route('cart.index')}}" title="Giỏ hàng">
                        <span class="cart_header_icon"></span>
                        <span class="box_text">
                            <strong class="cart_header_count">Giỏ hàng <span>({{ count((array) session('cart')) }})</span></strong>
                        </span>
                    </a>
                    {{-- <div class="cart_clone_box">
                        <div class="cart_box_wrap hidden">
                            <div class="cart_item original clearfix">
                                <div class="cart_item_image"></div>
                                <div class="cart_item_info">
                                    <p class="cart_item_title"><a href="" title=""></a></p>
                                    <span class="cart_item_quantity"></span>
                                    <span class="cart_item_price"></span>
                                    <span class="remove"></span>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="cart_header_top_box">
                        <div class="cart_empty">Giỏ hàng của bạn vẫn chưa có sản phẩm nào.</div>
                    </div> --}}
                </div>
                <!-- End Cart -->
                <!-- Account -->
                <div class="user_login">
                    @if (isset(Auth()->guard('customers')->user()->name))
                    <div class="user_login_icon"></div>
                    <div class="user_box">
                        <ul>
                            <form method="POST" action="{{ route('shoplogout') }}">
                                @csrf
                                <li><a href="#"onclick="event.preventDefault();
                                this.closest('form').submit();"
                            class="header-cart-link icon button circle is-outline is-small">Đăng xuất</a></li>
                        </form>
                        </ul>
                    </div>
                    {{ Auth()->guard('customers')->user()->name }}

                    @else
                    <div class="user_login_icon"></div>
                    <div class="box_text">
                        <strong>Tài khoản</strong>
                        
                        <!--<span class="cart_price">Đăng nhập, đăng ký</span>-->
                    </div>
                    <div class="user_box">
                        <ul>
                            <li><a href="{{route('login.index')}}">Đăng nhập</a></li>
                            <li><a href="{{route('shop.register')}}">Đăng ký</a></li>
                        </ul>
                    </div>
                    @endif

                </div>
                <!-- End account -->
            </div>
        </div>
    </div>
</div>