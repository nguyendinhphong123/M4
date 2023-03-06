@extends('admin.layouts.master')
@section('content')
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
                    <form class="row g-3" action="{{route('category.store')}}" method='post'>
                        <h2 style="color: black" class="offset-5">Thêm thể loại</h2>
                        @csrf
                        <div class="col-12">
                            <label style="color: black" class="form-label">Tên Thể Loại</label>
                            <input type="text" class="form-control" name="name"> <br>
                        </div>
                        <div class="col-12">
                            <div class="d-grid">
                                <button class="btn btn-info" type="submit">Thêm</button>
                                <a href="{{route('category.index')}}" class="btn btn-warning">Quay lại</a>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection