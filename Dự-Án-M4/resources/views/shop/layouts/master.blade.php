<!DOCTYPE html>
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta charset="UTF-8" />
    <title>SeaFood Store</title>
    <meta name="description" />
    <meta name="keywords" />
    <link href="{{asset('shop/Uploads/shop2005/images/favicon.png" rel="shortcut icon')}}" type="image/x-icon" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="fb:app_id" content="227481454296289" />

    <meta content="vi_VN" property="og:locale" />
    <meta content="website" property="og:type" />
    <meta content="SeaFood Store" property="og:title" />
    <meta property="og:description" />
    <meta content="{{asset('shop/Uploads/shop2005/images/logo.png')}}" property="og:image" />
    <meta content="http://runecom04.runtime.vn/" property="og:url" />
    <meta content="SeaFood Store" property="og:site_name" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .loader_overlay {
            position: fixed;
            z-index: 9999;
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
            background-color: #fff;
            -webkit-transition: all .1s ease;
            -o-transition: all .1s ease;
            transition: all .1s ease;
            opacity: 1;
            visibility: visible;
        }

        .loader_overlay.loaded {
            opacity: 0;
            visibility: hidden;
            z-index: -2;
        }
    </style>
    <!--CSS-->
    <link rel="stylesheet" href="{{asset('shop/assets/100004/js/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('shop/assets/100004/fonts/font-awesome/css/font-awesome.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('shop/assets/100004/fonts/fonts-master/roboto.css')}}">
    <!--JS-->
    <script src="{{asset('shop/assets/100004/js/plugin.js?v=582')}}"></script>
    <script src="{{asset('shop/assets/100004/js/option_selection.js')}}"></script>
    <script src="{{asset('shop/assets/100004/js/api.jquery.js')}}"></script>
    <script src="{{asset('shop/js/platform.js')}}" async="" defer=""></script>
    <script async="" defer="defer" data-target=".product-resize" data-parent=".products-resize"
        data-img-box=".image-resize" src="{{asset('shop/assets/100004/js/fixheightproductv2.js?v=582')}}"></script>
    <script src="{{asset('shop/assets/100004/js/scripts.js?v=582')}}"></script>
    <script src="{{asset('shop/Scripts/common/mycard.js')}}" type="text/javascript"></script>
    <script src="{{asset('shop/Scripts/lazyLoad/jquery.lazyload.min.js')}}" type="text/javascript"></script>

    <script src="{{asset('shop/Scripts/angularJS/angular.min.js')}}"></script>
    <script src="{{asset('shop/Scripts/angularJS/angular-sanitize.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('shop/Scripts/angular-loading-spinner/spin.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('shop/Scripts/angular-loading-spinner/angular-spinner.min.js')}}">
    </script>
    <script type="text/javascript" src="{{asset('shop/Scripts/angular-loading-spinner/angular-loading-spinner.js')}}">
    </script>
    <script src="{{asset('shop/app/appMain.js')}}"></script>
    <script src="{{asset('shop/app/directives/directive.js')}}"></script>
    <script src="{{asset('shop/app/directives/angular-summernote.js')}}"></script>
    <script src="{{asset('shop/app/directives/paging.js')}}"></script>
    <script src="{{asset('shop/app/services/ajaxServices.js')}}"></script>
    <script src="{{asset('shop/app/services/alertsServices.js')}}"></script>
    <link href="{{asset('shop/RUN004/style.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('shop/RUN004/responsive.css')}}" rel="stylesheet" type="text/css" />




</head>

<body ng-app="appMain" style="" cz-shortcut-listen="true">
    <div class="loader_overlay"></div>
    <div id="opacity" class=""></div>
    <div id="fb-root"></div>
    <script>
        (function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6&appId=227481454296289";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
    </script>


    <div class="wrapper">

        <div class="header">

            <script src="/Scripts/common/login.js" type="text/javascript"></script>
            @include('shop.includes.header')
            <!--Template--
<section class="top-link clearfix" ng-controller="moduleController" ng-init="initTopLinkController('Shop','AccountLogin')">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="nav navbar-nav topmenu-contact pull-left">
                   {{--  <li><i class="fa fa-phone"></i> <span>Hotline:{{shop.Hotline}}</span></li> --}}
                </ul>
                <ul class="nav navbar-nav navbar-right topmenu  hidden-xs hidden-sm" ng-if="accountLogin==null">
                    <li class="order-check"><a href="/kiem-tra-don-hang.html"><i class="fa fa-pencil-square-o"></i> Kiểm tra đơn hàng</a></li>
                    <li class="order-cart"><a href="/gio-hang.html"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
                    <li class="account-login"><a href="/dang-nhap.html"><i class="fa fa-sign-in"></i> Đăng nhập </a></li>
                    <li class="account-register"><a href="/dang-ky.html"><i class="fa fa-key"></i> Đăng ký </a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right topmenu hidden-xs hidden-sm" ng-if="accountLogin!=null">
                    <li class="order-check"><a href="/kiem-tra-don-hang.html"><i class="fa fa-pencil-square-o"></i> Kiểm tra đơn hàng</a></li>
                    <li class="order-cart"><a href="/gio-hang.html"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
                    <li class="webmaster"><a href="/admin"><i class="fa fa-gears"></i> Quản trị website</a></li>
                    <li class="account-info">
                        {{-- <a href="/thong-tin-tai-khoan.html">{{accountLogin.Email}}</a> --}}
                        <a class="account-logout" id="btnLogOff" href="javascript:void(0)" title="">[Thoát] </a>
                    </li>
                </ul>
                <div class="show-mobile hidden-lg hidden-md">
                    <div class="quick-user">
                        <div class="quickaccess-toggle">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="inner-toggle">
                            <ul class="login links" ng-if="accountLogin==null">
                                <li>
                                    <a href="/dang-ky.html"><i class="fa fa-sign-in"></i> Đăng ký</a>
                                </li>
                                <li>
                                    <a href="/dang-nhap.html"><i class="fa fa-key"></i>Đăng nhập</a>
                                </li>
                            </ul>
                            <ul class="login links" ng-if="accountLogin!=null">
                                <li ng-if="accountLogin.AccountTypeId==1">
                                    <a href="/admin"><i class="fa fa-gears"></i> Quản trị website</a>
                                </li>
                                <li>
                                    {{-- <a href="/thong-tin-tai-khoan.html">{{accountLogin.Email}}</a> --}}
                                </li>
                                <li>
                                    <a id="btnLogOff2" href="javascript:void(0)"><i class="fa fa-sign-out"></i> [Thoát] </a>
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
                                <li><a id="mobile-wishlist-total" href="/kiem-tra-don-hang.html" class="wishlist"><i class="fa fa-pencil-square-o"></i> Kiểm tra đơn hàng</a></li>
                                <li><a href="/gio-hang.html" class="shoppingcart"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
--End-->

            <!-- Header -->
            <header id="header">

                <div id="header_mobile">
                    <div class="container">
                        <div class="row">
                            <!-- Menu mobile -->
                            <button type="button" class="navbar-toggle collapsed" id="trigger_click_mobile">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <div id="mobile_wrap_menu" class="visible-xs visible-sm">
                                <div class="user_mobile">
                                    <div class="icon_user_mobile">
                                        <img src="{{asset('shop/assets/100004/images/user_mobile.png')}}" alt="account">
                                    </div>
                                    <div class="login_mobile">

                                        <a href="/dang-nhap.html" class="login-btn">Đăng nhập </a><a
                                            href="/dang-ky.html" class="login-btn"> / Đăng ký</a>
                                    </div>
                                    <div class="close_menu"></div>
                                </div>
                                <div class="content_menu">
                                    <ul>
                                        <li class="level0"><a class='' href='/trang-chu.html'><span>Trang chủ</span></a>
                                        </li>
                                        <li class="level0"><a class='' href='/gioi-thieu.html'><span>Giới
                                                    thiệu</span></a></li>
                                        <li class="level0"><a class='' href='/san-pham.html'><span>Sản phẩm</span></a>
                                        </li>
                                        <li class="level0"><a class='' href='/tin-tuc.html'><span>Tin tức</span></a>
                                        </li>
                                        <li class="level0"><a class='' href='/lien-he.html'><span>Liên hệ</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End menu mobile -->
                            <div class="pull-right mobile-menu-icon-wrapper">
                                <!-- Logo mobile -->
                                <div class="logo logo-mobile">
                                    <a href="/" title="C&#212;NG TY TNHH PH&#193;T TRIỂN C&#212;NG NGHỆ RUNTIME">
                                        <img src="{{asset('shop//Uploads/shop2005/images/logo.png')}}"
                                            alt="C&#212;NG TY TNHH PH&#193;T TRIỂN C&#212;NG NGHỆ RUNTIME">
                                    </a>
                                </div>
                                <!-- End Logo mobile -->
                                <!-- Cart mobile -->
                                <div class="cart_header" id="cart-target">
                                    <a href="/gio-hang.html" title="Giỏ hàng">
                                        <div class="cart_header_icon"></div>
                                        <div class="box_text">
                                            <strong class="cart_header_count"><span>0</span></strong>
                                        </div>
                                    </a>
                                </div>
                                <!-- End Cart mobile -->
                            </div>
                            <div class="clearfix"></div>
                            <!-- Search mobile -->
                            <div class="search_mobile col-md-12">
                                <div class="search_box">
                                    <div class="search_wrapper">
                                        <input type="text" name="search" class="index_input_search" id="txtsearch2"
                                            onblur="if(this.value=='')this.value='Nhập từ khóa tìm kiếm...'"
                                            onfocus="if(this.value=='Nhập từ khóa tìm kiếm...')this.value=''"
                                            value="Nhập từ kh&#243;a t&#236;m kiếm..." />
                                        <button class="btn_search_submit btn " type="button" id="btnsearch2"><span><i
                                                    class="fa fa-search"></i></span></button>
                                    </div>
                                </div>
                            </div>
                            <!-- End search mobile -->
                        </div>
                    </div>
                </div>
            </header>
            <!-- End header -->
            <script type="text/javascript">
                $("#btnsearch").click(function () {
                SearchProduct();
            });
            $("#btnsearch2").click(function () {
                SearchProduct2();
            });
            $("#txtsearch").keydown(function (event) {
                if (event.keyCode == 13) {
                    SearchProduct();
                }
            });
            $("#txtsearch2").keydown(function (event) {
                if (event.keyCode == 13) {
                    SearchProduct2();
                }
            });
            function SearchProduct() {
                var key = $('#txtsearch').val();
                if (key == '' || key == 'Tìm kiếm...') {
                    $('#txtsearch').focus();
                    return;
                }
                window.location = '/tim-kiem.html?key=' + key;
            }
            function SearchProduct2() {
                var key = $('#txtsearch2').val();
                if (key == '' || key == 'Tìm kiếm...') {
                    $('#txtsearch2').focus();
                    return;
                }
                window.location = '/tim-kiem.html?key=' + key;
            }
            </script>
            <!--Template--
--End-->

            <!-- Main menu -->
            <nav class="navbar-main">
                @include('shop.includes.sidebar')
            </nav>
            <!-- End main menu -->
            <script type="text/javascript">
                $(document).ready(function () {
        var str = location.href.toLowerCase();
        $("ul.menu li a").each(function () {
            if (str.indexOf(this.href.toLowerCase()) >= 0) {
                $("ul.menu li").removeClass("active");
                $(this).parent().addClass("active");
            }
        });
    });
            </script>
            <!--Template--

--End-->
        </div>



        <div class="slideshow">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-9 ">

                        <div class="homeslider">
                            <div id="owl-slider" class="owl-carousel owl-carousel-banner">
                                <div class="item">
                                    <a href="#"><img src="{{asset('shop/Uploads/shop2005/images/slide/slider_1.jpg')}}"
                                            alt="1"></a>
                                </div>
                                <div class="item">
                                    <a href="#"><img src="{{asset('shop/Uploads/shop2005/images/slide/slider_2.jpg')}}"
                                            alt="2"></a>
                                </div>
                                <div class="item">
                                    <a href="#"><img src="{{asset('shop/Uploads/shop2005/images/slide/slider_3.jpg')}}"
                                            alt="3"></a>
                                </div>
                            </div>
                        </div>
                        <!--Template--
--End-->
                    </div>
                </div>
            </div>
        </div>


        <div class="adv">

            <section id="service">
                <div class="container m-b-30">
                    <div class="row">
                        <div id="service_home" class="clearfix">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 col-xxs-12 text-center m-b-xs-10">
                                <div class="service_item">
                                    <div class="icon icon_product">
                                        <img src="{{asset('shop/assets/100004/images/icon_1.png?v=582')}}" alt="">
                                    </div>
                                    <div class="description_icon">
                                        <span class="large-text">
                                            Miễn phí giao hàng
                                        </span>
                                        <span class="small-text">
                                            Cho hóa đơn từ 450,000đ
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 col-xxs-12 text-center m-b-xs-10">
                                <div class="service_item">
                                    <div class="icon icon_product">
                                        <img src="{{asset('shop/assets/100004/images/icon_2.png?v=582')}}" alt="">
                                    </div>
                                    <div class="description_icon">
                                        <span class="large-text">
                                            Giao hàng trong ngày
                                        </span>
                                        <span class="small-text">
                                            Với tất cả đơn hàng
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center m-b-xs-10">
                                <div class="service_item">
                                    <div class="icon icon_product">
                                        <img src="{{asset('shop/assets/100004/images/icon_3.png?v=582')}}" alt="">
                                    </div>
                                    <div class="description_icon">
                                        <span class="large-text">
                                            Sản phẩm an toàn
                                        </span>
                                        <span class="small-text">
                                            Cam kết chất lượng
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Begin-->
            <!--End-->
        </div>


        <div class="main">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">

                        <script src="/app/services/moduleServices.js"></script>
                        <script src="/app/controllers/moduleController.js"></script>
                        <!--Begin-->
                        <div class="box-adv" ng-controller="moduleController"
                            ng-init="initAdvMenuController('AdvMenus')">
                            <div class="sidebar_banner" ng-repeat="item in AdvMenus">
                                <div class="img_banner">
                                    <a href="">
                                        <img ng-src="" data-original="" alt="" class="img-responsive lazy">
                                        <div class="figcaption"></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!--End-->

                        <!-- Blog sidebar -->

                        <!-- End blog sidebar -->
                    </div>
                    <div class="col-md-9">






                    </div>
                   @yield('content')
                    
                </div>
            </div>
        </div>
    </div>
    </div>


    <div class="partner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <!--Blog-->
                    <section id="blog_index" class="container m-b-20">
                        <div class="row">


                    </section>
                    <!--EndBlog-->
                </div>
            </div>
        </div>
    </div>


    <div class="footer">

        <script src="{{asset('shop/app/services/moduleServices.js')}}"></script>
        <script src="{{asset('shop/app/controllers/moduleController.js')}}"></script>
        @include('shop.includes.footer')
        <!--Template--
<footer class="footer-content" ng-controller="moduleController" ng-init="initFooterController('Shop')">
    <div class="footer_top">
        <div class="container">
            <div class="footer_top_wrap">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12" ng-repeat="item in menus|filter: { ParentId: null }|limitTo:2">
                        <div class="footer_block">
                            <h4 class="footer_block_title">
                                {{-- <span>{{item.Name}}</span> --}}
                            </h4>
                            <div class="block_content">
                                <ul class="list_group" ng-if="(menus|filter: { ParentId: item.Id }).length>0">
                                    <li ng-repeat="it in menus|filter: { ParentId: item.Id }">
                                        {{-- <a href="/{{it.PageCode}}.html" ng-if="it.LinkType==LinkTypeConst.Page"> --}}
                                            {{-- {{it.Name}} --}}
                                        </a>
                                        {{-- <a href="/{{it.PageOptionCode}}/{{it.PageContentCode}}.html" ng-if="it.LinkType==LinkTypeConst.PageContent"> --}}
                                            {{-- {{it.Name}} --}}
                                        </a>
                                        {{-- <a href="/san-pham/{{it.ProductGroupCode}}" ng-if="it.LinkType==LinkTypeConst.GroupProduct"> --}}
                                            {{-- {{it.Name}} --}}
                                        </a>
                                        {{-- <a href="/tin-tuc/{{it.NewsGroupCode}}" ng-if="it.LinkType==LinkTypeConst.GroupNews"> --}}
                                            {{-- {{it.Name}} --}}
                                        </a>
                                        {{-- <a href="/du-an/{{it.ProjectGroupCode}}" ng-if="it.LinkType==LinkTypeConst.GroupProject"> --}}
                                            {{-- {{it.Name}} --}}
                                        </a>
                                        {{-- <a href="/dich-vu/{{it.ServiceGroupCode}}" ng-if="it.LinkType==LinkTypeConst.GroupService"> --}}
                                            {{-- {{it.Name}} --}}
                                        </a>
                                      {{--   <a href="/san-giao-dich/{{it.ExchangeGroupCode}}" ng-if="it.LinkType==LinkTypeConst.GroupExchange"> --}}
                                            {{-- {{it.Name}} --}}
                                        </a>
                                      {{--   <a href="{{it.Url}}" ng-if="it.LinkType==LinkTypeConst.Url"> --}}
                                            {{-- {{it.Name}} --}}
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="footer_block">
                            <h4 class="footer_block_title">
                                Đăng ký nhận bản tin
                            </h4>
                            <div class="block_content">
                                <div class="des_newsletter_form">
                                    Đăng Ký Thành Viên Để Nhận Bản Tin Mỗi Ngày:
                                </div>
                                <form id="newsletter_form" ng-submit="registerNewsletter()" class="m-b-20 contact-form">
                                    <div class="newsletter_wrap">
                                        <input ng-model="newsletter.Email" required="" id="contact_email" autocomplete="off" type="email">
                                        <label>Email của bạn </label>
                                        <button class="btn-newsletter" type="submit">
                                            <span><i class="fa fa-paper-plane-o"></i></span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="footer_block">
                            <h4 class="footer_block_title">
                                Theo dõi trên Fanpage
                            </h4>
                            <div class="block_content">
                                {{-- <div class="fb-page" data-small-header="true" data-href="{{shop.Fanpage}}" data-tabs="message" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_bottom">
        <div class="container">
            <div class="footer_bottom_wrap">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="footer_address">
                            {{-- <p><span>{{shop.Name}}</span></p> --}}
                            {{-- <p><span>Địa chỉ: {{shop.Address}}</span></p> --}}
                            {{-- <p><span>Số điện thoại: {{shop.Phone}}</span></p>
                            <p><span>Số di động: {{shop.Hotline}}</span></p>
                            <p><span>Email: {{shop.Email}}</span></p> --}}
                        </div>
                    </div>
                    <div class="col-lg-5 text-right text-center-xs">
                        <div class="copy_right">
                            <p>
                                {{-- &copy; 2017. Bản quyền thuộc về <a rel="nofollow" href="{{shop.Website}}">{{shop.Name}}</a>. Powered by <a href="http://www.runtime.vn">RUNTIME.VN</a> --}}
                            </p>
                        </div>
                        <div class="social_footer">
                            <ul>
                                {{-- <li><a href="{{shop.Facebook}}"><span><i class="fa fa-facebook"></i></span></a></li>
                                <li><a href="{{shop.Twitter}}"><span><i class="fa fa-twitter"></i></span></a></li>
                                <li><a href="{{shop.Google}}"><span><i class="fa fa-google-plus"></i></span></a></li>
                                <li><a href="{{shop.Youtube}}"><span><i class="fa fa-youtube"></i></span></a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
--End-->
    </div>

    </div>


    <div style="display: none;" id="loading-mask">
        <div id="loading_mask_loader" class="loader">
            <img alt="Loading..." src="/Images/ajax-loader-main.gif" />
            <div>
                Please wait...
            </div>
        </div>
    </div>
    <a href="javascript:void(0);" class="back-to-top"><span>Top</span></a>


</body>

</html>
<script type="text/javascript">
    $(".header-content").css({ "background": '' });
    $("html").addClass('');
</script>