<form action="{{route('books.store')}}" method='post'>
    @csrf
    <h2>Thêm Sách</h2>
    
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Tên Sách</label>
      <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
      @error('name')
      <div class="alert alert-danger">{{ $message }}</div>
  @enderror
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">ISBN</label>
      <input type="text" class="form-control" name="isbn" id="exampleInputPassword1">
      @error('isbn')
      <div class="alert alert-danger">{{ $message }}</div>
  @enderror
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Tác giả</label>
        @error('tacgia')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
        <select name="tacgia" class="form-control">
            <option name="tacgia">Dương Quốc Khang</option>
            <option name="tacgia">Nguyễn Như Ngọc</option>
            <option name="tacgia">Nguyễn Đình Phong</option>
            <option name="tacgia">Nguyễn Huỳnh Bảo Châu</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Thể loại</label>
        @error('theloai')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
        <select name="theloai" class="form-control">
            <option name="theloai">Viễn Tưởng</option>
            <option name="theloai">Kinh Dị</option>
            <option name="theloai">Truyền Thuyết</option>
            <option name="theloai">Tình Cảm</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Số Trang</label>
        <input type="text" class="form-control" name="sotrang" id="exampleInputPassword1">
        @error('sotrang')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Năm Sản Xuất</label>
        <input type="text" class="form-control" name="namsanxuat" id="exampleInputPassword1">
        @error('namsanxuat')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
      </div>
    <button type="submit" class="btn btn-primary">Thêm</button>
    <a href="{{ route('books.index') }}">Quay lại</a>
  </form>