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
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên Khách Hàng</th>
                <th>Địa Chỉ</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $key => $item)
                                <tr>
                                    <th scope="row">{{ ++$key }}</th>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->address }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->phone }}</td>
                                </tr>
                            @endforeach
                </tr>
            </tbody>

        </table>
        
    </div>
    
    @endsection