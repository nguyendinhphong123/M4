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
                    <form action="{{route('product.update',[$products->id])}}" method='post' enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <h2 style="color: black" class="offset-5">Chỉnh Sửa Sản Phẩm</h2>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Tên Sản Phẩm</label>
                          <input type="text" class="form-control" name="name" value='{{$products->name}}' aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Giá</label>
                          <input type="text" class="form-control" name="price" value='{{$products->price}}'>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Số Lượng</label>
                            <input type="text" class="form-control" name="quantity" value='{{$products->quantity}}' >
                          </div>
                          <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Mô Tả</label>
                            <textarea class="form-control" placeholder="Miêu tả" id="editor"  name="description" rows="4" cols="4">{{$products->description}}</textarea>
                          </div>
                          <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Thể Loại</label>
                            <select name="category_id" id="" class="form-control">
                              <option value="">--Vui lòng chọn--</option>
                              @foreach ($categories as $category)
                              <option
                                  <?= $category->id == $products->category_id ? 'selected' : '' ?>
                                  value="{{ $category->id }}">
                                  {{ $category->name }}</option>
                          @endforeach
                          </select>
                          </div>
                          <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Ảnh</label>
                            <input type="file" class="form-control" name="image" value='{{$products->image}}'>
                          </div>
                          <input type="submit" value="Cập nhật" class="btn btn-primary">
                          <a href="{{route('product.index')}}" class="btn btn-danger">Huỷ</a>
                      </form>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection