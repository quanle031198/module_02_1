<!DOCTYPE html>
<html>

<head>

    <title>[*Bài tập] Ứng dụng chuyển đổi tiền tệ</title>
</head>

<body>
    <form method="POST">
        <input type="number" required min="0" name="usd" placeholder="Nhap tien USD" />
        <input type="submit" value="chuyen doi sang vnd" />
    </form>
</body>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usd = $_POST['usd'];
    if ($usd >= 0) {
        echo "<br/>" . $usd * 23000;
    } else {
        echo "<br/> Mời nhập số lớp hơn 0";
    }
}

?>

</html>