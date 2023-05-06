@extends('admin.layouts.master')
@section('content')


<div class="container py-5 h-100">
  
        <div class="card" style="border-radius: 10px;">
            <div class="card-header px-4 py-5">
                <h5 style="text-align:center;">Đơn Hàng Được Mua, <span style="color: rgb(248, 61, 61);">Shop
                        Admin</span>!</h5>
            </div>
            <div class="card-body p-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <p class="lead fw-normal mb-0" style="color: rgb(248, 61, 61);">Sản Phẩm Đã Mua
                    </p>
                </div>
                @php
                $total = 0;
                @endphp
                <div class="row">
                    <div class="col-md-2">Ảnh</div>
                    <div class="col-md-4 text-center d-flex justify-content-center align-items-center">
                        Tên Sản Phẩm</div>
                    <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                        Số Lượng</div>
                    <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                        Giá 1/1</div>
                    <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                        Tổng Giá</div>
                </div>
                @foreach ($items as $key => $order_detail)
                @php $total += $order_detail->quantity * $order_detail->price @endphp
                <div class="card shadow-0 border mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2">
                                <img src="{{ asset('uploads/product/' . $order_detail->image) }}"
                                    alt="{{ $order_detail->name }}" width="120px" height="120px" class="anh">
                            </div>
                            <div class="col-md-4 text-center d-flex justify-content-center align-items-center">
                                <p class="text-muted mb-0">{{ $order_detail->name }}
                                </p>
                            </div>
                            <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                <p class="text-muted mb-0 small">{{ $order_detail->quantity }}
                                </p>
                            </div>
                            <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                <p class="text-muted mb-0 small">
                                    {{ number_format($order_detail->price) }}</p>
                            </div>
                            <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                <p class="text-muted mb-0 small">
                                    {{ number_format($order_detail->quantity * $order_detail->price) }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                

            <div class="card-footer border-0 px-2 py-3"
                style="background-color: rgb(248, 61, 61); border-bottom-left-radius: 7px; border-bottom-right-radius: 7px;">
                <h5 class="d-flex align-items-center justify-content-end text-white text-uppercase mb-0">
                    <strong>Tổng Tiền :
                        {{ number_format($total) }} vnđ</strong>
                    </span>
                </h5>
                <a href="{{ route('order.index') }}" class="btn btn-warning">Thoát</a>
            </div>

        </div>
</div>


<style>
    img.anh {
        margin: 24px 0px 0px 0px;
    }
    .card-body {
    background: white;
}
</style>
@endsection