<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        [Bài tập] Ứng dụng Product Discount Calculator</title>
</head>

<body>
    <form action="display_discount.php" method="POST">
        <input type="text" name="prd_description" placeholder="Mô tả sản phẩm" />
        <input type="number" name="price" placeholder="Giá niêm yết của sản phẩm" />
        <input type="number" name="discount" placeholder="Tỷ lệ chiết khấu" />
        <input type="submit" name="caculate" value="Caculate" />
    </form>
</body>

</html>