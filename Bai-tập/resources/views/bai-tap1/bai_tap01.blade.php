<form action="/xu-ly-bai-tap01" method="post">
    @csrf
    Product Description:
    <input type="text" name="productDescription"><br>
    List Price:
    <input type="text" name="discountPrice" id=""><br>
    Discount Percent:
    <input type="text" name="discountPercent" id=""><br>
    <input type="submit" value="Calculate Discount">

</form>