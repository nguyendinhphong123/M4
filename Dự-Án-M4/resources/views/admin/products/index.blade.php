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
    <table class="table" style="text-align:center">
        <a href="{{route('product.create')}}" class="btn btn-info">Thêm mới</a>
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
            @foreach($products as $key => $item)
            <tr>
                <td>{{++$key}}</td>
                <td>{{$item->name}}</td>
                <td>{{number_format( $item->price) }} VND</td>
                <td>{{$item->category->name}}</td>
                <td>
                    <img src="{{ asset('uploads/product/' . $item->image) }}" alt=""
                        style="width: 70px">
                </td>
                <td>
                    <form action="{{route('product.softdeletes',[$item->id])}}" method="post">
                        @method('PUT')
                        @csrf
                        <a href="{{route('product.edit',[$item->id])}}" class="btn btn-warning">Sửa</a>
                        <button onclick="return confirm('Bạn có muốn chuyển danh mục này vào thùng rác không?');"
                            class="btn btn-danger">Xóa</button>
                            <a href="{{route('product.show',[$item->id])}}" class="btn btn-info">Chi tiết</a>
                        </form>
                    </td>
                    @endforeach
                </tr>
            </tbody>

        </table>
        
        {{ $products->links() }}
    </div>
    
    @endsection
