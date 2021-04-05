<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>[**Bài tập] Hiển thị số lượng tùy ý số nguyên tố đầu tiên</title>
</head>
<body>
  <form method="POST">
    <input type="number" name="numbers" placeholder="nhap vao so luong so nguyen to"/>
    <input type="submit" id="submit" value="Submit"/>
  </form>
</body>
<?php 
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $numbers = $_POST['numbers'];
    $count = 0;
    for($n = 2; $n <= $numbers; $n++ ){
        if($n %2 == 0){
            echo $n. " khong phai so nguyen to <br/>";
        }
        else
        {
            echo $n. " la so nguyen to <br/>";

        }
    }
}
?>
</html>