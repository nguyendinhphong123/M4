<div class="main-content">
    <h1>Ứng dụng kiểm tra email hợp lệ</h1>
    <form action="{{ route('checkEmail')}}" method="post">
        @csrf
        <label for="email-input">Email:</label>
        <input type="text" name="email" id="email-input" placeholder="Nhập email cần kiểm tra">
        <input type="submit" value="Check">
    </form>
    @if(isset($isEmail))
    Kết quả: {{ $isEmail ? 'Đúng định dạng Email' : 'Sai định dạng Email' }}
    @endif
</div>