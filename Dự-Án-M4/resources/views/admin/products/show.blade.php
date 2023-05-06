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

    <table class="table" >
        <h2 style="text-align:center">Chi tiết sản phẩm</h2>
        <thead>
            <tr> <th>ID: {{$productshow->id}} </th></tr>
            <tr> <th>Tên sản phẩm : {{$productshow->name}} </th></tr>
            <tr> <th>Giá :{{number_format($productshow->price)}} vnd </th></tr>
            <tr> <th>Số lượng :{{$productshow->quantity}} </th></tr>
            <tr> <th style="display: inline-block">Mô tả :{!!$productshow->description!!} </th></tr>
            <tr> <th>Thể loại :{{$productshow->category->name}} </th></tr>
            <tr> Ảnh  :<img src="{{ asset('uploads/product/' . $productshow->image) }}" alt=""
                style="width: 450px";>   </tr>
                
        </thead>
        
        </table>
        
    </div>
@endsection