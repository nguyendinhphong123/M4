@extends('admin.layouts.master')
@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<style>
    .card-body {
        background: rgb(255, 255, 255);
    }

    main#main {
        background: azure;
    }
</style>

<main class="page-content" id="main">
    <div class="container">
        <div class="col-12 col-lg-12 d-flex">
            <div class="card border shadow-none w-100">
                <div class="card-body">
                    <form action="{{route('category.update',[$categories->id])}}" method='post'>
                        @method('PUT')
                        @csrf
                        <h2 style="color: black" class="offset-5">Chỉnh sửa thể loại</h2>
                        <div class="col-12">
                            <label style="color: black" class="form-label">Tên Thể Loại</label>
                            <input type="text" class="form-control" name="name" value='{{$categories->name}}'> <br>
                        </div>
                        <input type="submit" value="Cập nhật" class="btn btn-primary">
                        <a href="{{route('category.index')}}" class="btn btn-danger">Huỷ</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection