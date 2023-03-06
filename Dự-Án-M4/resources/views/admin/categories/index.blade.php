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
    
    <table class="table" style="text-align:center">
        <a href="{{route('category.create')}}" class="btn btn-info">Thêm mới</a>
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên Thể Loại</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $key => $item)
            <tr>
                <td>{{++$key}}</td>
                <td>{{$item->name}}</td>
                <td>
                    <form action="{{route('category.destroy',[$item->id])}}" method="post">
                        @method('DELETE')
                        @csrf
                        <a href="{{route('category.edit',[$item->id])}}" class="btn btn-warning">Sửa</a>
                        <button onclick="return confirm('Bạn có muốn xóa  này không?');"
                            class="btn btn-danger">Xóa</button>
                        </form>
                    </td>
                    @endforeach
                </tr>
            </tbody>
            
        </table>
    </div>
    @endsection




