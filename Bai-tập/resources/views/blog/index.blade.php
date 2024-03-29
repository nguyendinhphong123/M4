

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<a class="btn btn-primary" href="{{route('blogs.create')}}">Thêm </a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">Số thứ tự</th>
        <th scope="col">Tên</th>
        <th scope="col">Mô Tả</th>
        <th scope="col">Quản lý</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($blogs as $key => $team)
        <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{$team->name}}</td>
            <td>{{$team->description}}</td>
            </div>
            <td>
                <form action="{{route('blogs.destroy',[$team->id])}}" method="post">
                    @method('DELETE')
                    @csrf
                    <button onclick="return confirm('Bạn có muốn xóa  này không?');" class="btn btn-danger">Xóa</button>
                <a href="{{route('blogs.edit',[$team->id])}}" class="btn btn-primary">Sửa</a>

                    </form>
            </td>
          </tr>
@endforeach