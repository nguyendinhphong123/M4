@extends('admin.layouts.master')
@section('content')
<style>
    .container {
        background: azure;
    }

    th,
    td {
        color: black;
    }
</style>

<div class="container">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger" role="alert">
            {{ session('error') }}
        </div>
    @endif
    <table class="table" style="text-align:center">
        <h2 style="text-align:center">Thùng Rác Sản Phẩm</h2>
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên Sản Phẩm</th>
                <th>Giá</th>
                <th>Thể loại</th>
                <th>Ảnh</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $key => $product)
            <tr data-expanded="true" class="item-{{ $product->id }}">
                <td style="width:5%">{{ $key + 1 }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ number_format($product->price) }}</td>
                <td>{{ $product->category->name }}</td>
                <td>
                    <img style="width:100px ; height: 75px ; border-radius:0%"
                        src="{{ asset('uploads/product/' . $product->image) }}" alt="">
                </td>

                <td>
                    <form action="{{ route('product.restoredelete', $product->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <button type="submit" class="btn btn-success">Khôi Phục</button>
                        <a href="{{ route('product.destroy', $product->id) }}" id="{{ $product->id }}"
                            class="btn btn-danger">Xóa Vĩnh Viễn</a>

                    </form>
                </td>
                    @endforeach
                </tr>
            </tbody>

        </table>
        
        {{ $products->appends(request()->query()) }}
    </div>
    
@endsection