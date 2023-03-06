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
                    <form action="{{route('product.store')}}" method='post' enctype="multipart/form-data">
                        <h2 style="color: black" class="offset-5">Thêm Sản Phẩm</h2>
                        @csrf
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Tên Sản Phẩm</label>
                          <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Giá</label>
                          <input type="text" class="form-control" name="price" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Số Lượng</label>
                            <input type="text" class="form-control" name="quantity" id="exampleInputPassword1">
                          </div>
                          <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Mô Tả</label>
                            <textarea class="form-control" placeholder="Mô tả" id="editor" name="description" rows="4" cols="4"></textarea>
                          </div>
                          <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Thể Loại</label>
                            <select name="category_id" id="" class="form-control">
                              <option value="">--Vui lòng chọn--</option>
                              @foreach ($categories as $category)
                                  <option value="{{ $category->id }}">{{ $category->name }}</option>
                              @endforeach
                          </select>
                          </div>
                          <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Ảnh</label>
                            <input type="file" class="form-control" name="image" id="exampleInputPassword1">
                          </div>
                        
                          <div class="d-grid">
                            <button class="btn btn-info" type="submit">Thêm</button>
                            <a href="{{route('product.index')}}" class="btn btn-warning">Quay lại</a>

                        </div>
                      </form>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection