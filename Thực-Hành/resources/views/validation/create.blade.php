<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="main-content">
        <h1>Form điền thông tin</h1>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <form action="{{route('store')}}" method="post">
            {{ csrf_field() }}
            <label for="number">chỉ được nhập số</label>
            <input type="text" name="number" id="">
            <button type="submit">Kiểm tra</button>
        </form>        
    </div>
</body>
</html>