@extends('shop.layouts.master')
@section('content')
{{-- @if (session('alert'))
<script>
 alert('1234567');
</script>
 @endif --}}

<div class="product_home">
    <div class="product_home_image">
        <a href="/san-pham/sua-33810">
            <img src="{{asset('shop/Uploads/shop2005/images/slide/image-product-home-2.jpg')}}" alt="Sứa">
            <div class="figcaption"></div>
        </a>
    </div>
    <div class="clearfix">
        <div class="section-heading">
            <h2 title="Sứa">
                <span>Tất Cả Sản Phẩm</span>
            </h2>
        </div>
    </div>
    
    <div class="clearfix">


        @foreach($products as $product)
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 product-wrapper zoomIn wow">
            <div class="product-block product-resize">
                <div class="product-image image-resize">
                    <div class="product-sale">
                        <span class="sale-lb">-29%</span>
                    </div>
                    <a href="/san-pham/tom-hum-bong.html">
                        <img class="first-img" width="300" height="300"
                            src="{{ asset('uploads/product/' . $product->image) }}" alt="T&#244;m h&#249;m b&#244;ng">
                    </a>
                    <div class="product-actions hidden-xs">
                        <div class="btn-add-to-cart" onclick="AddToCard(46484,1)">
                            <a href="{{route('shop.store',$product->id)}}"><i class="fa fa-shopping-bag"
                                    aria-hidden="true"></i></a>
                        </div>
                        <div class="btn_quickview">
                            <a class="quickview" href="{{route('shop.show',$product->id)}}"><i
                                    class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="product-info text-center m-t-xxs-20">
                    <h3 class="pro-name">
                        <a href="{{route('shop.show',$product->id)}}"
                            title="T&#244;m h&#249;m b&#244;ng">{{$product->name}}</a>
                    </h3>
                    <div class="pro-prices">
                        <span class="pro-price">{{number_format($product->price)}} VND</span>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        {{ $products->links() }}

    </div>
</div>
@endsection