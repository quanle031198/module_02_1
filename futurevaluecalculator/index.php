<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<head>
    <style>
        input[type=number] {
            width: 300px;
            font-size: 16px;
            border: 2px solid #ccc;
            border-radius: 4px;
            padding: 12px 10px 12px 10px;
        }

        #submit {
            border-radius: 2px;
            padding: 10px 32px;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <h2>[Bài tập] Ứng dụng Future Value Calculator</h2>
    <form method="post">
        <input type="number" name="amount" placeholder="Lượng tiền đầu tư ban đầu" />
        <input type="number" name="interest" placeholder="Lãi suất năm" />
        <input type="number" name="numofyear" placeholder="Số năm đầu tư" />
        <input type="submit" id="submit" value="Tính" />
    </form>
</body>
<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $amount = $_POST["amount"];
    $interest = $_POST["interest"];
    $numofyear = $_POST["numofyear"];

    $futureValues = $amount + ($amount * $interest);
    echo "<p>" .$futureValues."</p>";
    
}
?>

</html>