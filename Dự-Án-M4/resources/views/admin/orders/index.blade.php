@extends('admin.layouts.master')
@section('content')

<div class="container">
    <div class="row">

        <div class="col-lg-12">
                <div class="card-body">

                    <table class="table">
                        <thead>
                            <h2 style="text-align: center">Danh Sách Đơn Hàng</h2><br>
                        
                            <tr>
                                <th colspan="2">STT</th>
                                <th colspan="2">Tên</th>
                                <th colspan="2">Địa chỉ</th>
                                <th colspan="2">Email</th>
                                <th colspan="2">Số điện thoại</th>
                                <th colspan="2">Ngày Đặt</th>
                                <th colspan="2">Tùy chọn</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $key => $order)
                            <tr>
                                <th scope="row">{{ ++$key }}</th>
                                <td colspan="2">{{ $order->customer->name }}</td>
                                <td colspan="2">{{ $order->customer->address }}</td>
                                <td colspan="2">{{ $order->customer->email }}</td>
                                <td colspan="2">{{ $order->customer->phone }}</td>
                                <td colspan="2">{{ $order->created_at }}</td>
                                
                                <td colspan="2">
                                    <a href="{{ route('order.detail', [$order->id]) }}" class="btn btn-info">Chi tiết</a>
                                </td>
                            </tr>
                            @endforeach
                    </table>
                    {{-- {{ $items->onEachSide(5)->links() }} --}}
            </div>
        </div>
    </div>

    @endsection