<section class="top-link clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="nav navbar-nav topmenu-contact pull-left">
                    <li><i class="fa fa-phone"></i> <span>Hotline:036 771 7778</span></li>
                </ul>
                <ul class="nav navbar-nav navbar-right topmenu  hidden-xs hidden-sm">
                    <li class="order-check"><a href="/kiem-tra-don-hang.html"><i
                                class="fa fa-pencil-square-o"></i> Kiểm tra đơn hàng</a></li>
                    <li class="order-cart"><a href="/gio-hang.html"><i class="fa fa-shopping-cart"></i> Giỏ
                            hàng</a></li>
                    <li class="account-login"><a href="/dang-nhap.html"><i class="fa fa-sign-in"></i> Đăng
                            nhập </a></li>
                    <li class="account-register"><a href="/dang-ky.html"><i class="fa fa-key"></i> Đăng ký
                        </a></li>
                </ul>
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
                        <input type="text" name="search" class="index_input_search" id="txtsearch"
                            onblur="if(this.value=='')this.value='Nhập từ khóa tìm kiếm...'"
                            onfocus="if(this.value=='Nhập từ khóa tìm kiếm...')this.value=''"
                            value="Nhập từ kh&#243;a t&#236;m kiếm..." />
                        <button class="btn_search_submit btn " type="button" id="btnsearch"><span>Tìm
                                ngay</span></button>
                    </div>
                </div>
                <!-- End Search -->
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <!-- Cart -->
                <div class="cart_header">
                    <a href="/gio-hang.html" title="Giỏ hàng">
                        <span class="cart_header_icon"></span>
                        <span class="box_text">
                            <strong class="cart_header_count">Giỏ hàng <span>(0)</span></strong>
                            <span class="cart_price">0₫</span>
                        </span>
                    </a>
                    <div class="cart_clone_box">
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
                    </div>
                    <div class="cart_header_top_box">
                        <div class="cart_empty">Giỏ hàng của bạn vẫn chưa có sản phẩm nào.</div>
                    </div>
                </div>
                <!-- End Cart -->
                <!-- Account -->
                <div class="user_login">
                    <div class="user_login_icon"></div>
                    <div class="box_text">
                        <strong>Tài khoản</strong>
                        <!--<span class="cart_price">Đăng nhập, đăng ký</span>-->
                    </div>
                    <div class="user_box">
                        <ul>
                            <li><a href="{{route('register')}}">Đăng nhập</a></li>
                            <li><a href="{{route('login')}}">Đăng ký</a></li>
                        </ul>
                    </div>
                </div>
                <!-- End account -->
            </div>
        </div>
    </div>
</div>