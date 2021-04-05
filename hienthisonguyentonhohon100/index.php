<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>[*Bài tập] Hiển thị các số nguyên tố nhỏ hơn 100</title>
</head>

<body>
    <form method="POST">
        <input type="number" min="0" require name="prime" placeholder="input prime" />
        <input type="submit" value="tinh" />
    </form>
</body>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $prime = $_POST['prime'];
    if ($prime == 0 && $prime == 1) {
        echo $prime . " không phải là số nguyên tố";
    }
    if ($prime < 100) {
        if ($prime % 2 == 0) {
            echo $prime . " không phải là số nguyên tố";
        } else {
            echo $prime . " là số nguyên tố";
        }
    }
}
?>

</html>