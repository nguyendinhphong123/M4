@extends('shop.layouts.master')
@section('content')

<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-lg-8 table-responsive mb-5">
            <table class="table table-light table-borderless table-hover text-center mb-0">
                <thead class="thead-dark">
                    <tr>
                        <th>Sản phẩm</th>
                        <th>Giá</th>
                        <th>Số lượng</th>
                        <th>Tổng</th>
                        <th>Tùy chọn</th>
                    </tr>
                </thead>
                <tbody class="align-middle">
                    @php
                    $total = 0;
                    $totalAll = 0;
                @endphp
                 @if (session('cart'))
                 @foreach (session('cart') as $id => $details)
                 @php
                     $total = $details['price'] * $details['quantity'];
                     $totalAll += $total;
                 @endphp
                    <tr>
                        <td class="align-middle">
                            <img  src="{{ asset('uploads/product/'.$details['image']) }}" alt="" style="width: 50px;"><a>{{ $details['nameVi'] ?? '' }}</a></td>
                        <td style="color: red" class="align-middle">{{ number_format($details['price']) }} vnd</td>
                      
                        <td data-th="Quantity">
                            <input style="width: 65px" type="number" value="{{ $details['quantity'] }}" min="1" class="input-group quantity" />
                        </td>
                      
                        <td style="color: red" class="align-middle">{{ number_format($total) }} vnd</td>
                        <td class="align-middle">
                            <button class="btn btn-info btn-sm update-cart" data-id="{{ $id }}"><i class="fa fa-refresh"></i></button>
                            <button class="btn btn-danger btn-sm remove-from-cart" data-id="{{$id}}"><i class="fa fa-trash-o"></i></button>
                        </td>
                    </tr>
                </tbody>
                @endforeach
                @else
                <tr>
                    <td>
                       <h3>Giỏ hàng của bạn chưa có sản phẩm nào?</h3> 
                    </td>
                </tr>
                @endif
            </table>
        </div>
        <div class="col-lg-4">
         
            <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Tóm tắt giỏ hàng</span></h5>
            <div class="bg-light p-30 mb-5">
                <div class="border-bottom pb-2">
                    <div class="d-flex justify-content-between mb-3">
                        <h6>Tổng</h6>
                        {{-- <h6>$ {{ $totalAll}}</h6> --}}
                        <h6>{{ number_format($totalAll) }}vnd</h6>
                    </div>
                    <div class="d-flex justify-content-between">
                        <h6 class="font-weight-medium">Phí vận chuyển</h6>
                        <h6 class="font-weight-medium">30000 vnd</h6>
                    </div>
                </div>
                <div class="pt-2">
                    <div class="d-flex justify-content-between mt-2">
                        <h5>Tổng thu</h5>
                        <h5>{{ number_format($totalAll + 30000)  }} Vnd </h5>
            </div>
        </div>
    </div>
    <div class="input-group-append">
        @if (session('cart'))
                        <a href="{{ route('shop.checkOuts') }}" class="btn btn-danger pull-right">Thanh toán</a>
                    @endif
    </div>
</div>

@endsection


@section('scripts')
    <script type="text/javascript">
        $(".update-cart").click(function (e) {
           e.preventDefault();
           var ele = $(this);
            $.ajax({
               url: '{{ url('shop/update-cart') }}',
               method: "put",
               data: {
                    // username: 'NVA',
                    // password: '123',   
                    _token: '{{ csrf_token() }}', 
                    id: ele.attr("data-id"), 
                    quantity: ele.parents("tr").find(".quantity").val()
                },
               success: function (response) {
                   window.location.reload();
               }
            });
        });
        $(".remove-from-cart").click(function (e) {
            e.preventDefault();
            var ele = $(this);
            if(confirm("Are you sure")) {
                $.ajax({
                    url: '{{ url('shop/remove-from-cart') }}',
                    method: "DELETE",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });
    </script>
@endsection
