<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="/discountAmount" method="post">
    @csrf
    <h2>Product Infor</h2>
    <p>Descripttion Product</p>
    <textarea name="ProductDescription"  cols="30" rows="10"></textarea>
    <p>List Price</p>
    <input type="number" placeholder="money USD" name="price">
    <p>Discount Percent</p>
    <input type="number" placeholder="number %" name="percent">% <br>
    <input type="submit" value="Calculate Discount">

</form>

</body>
</html>
