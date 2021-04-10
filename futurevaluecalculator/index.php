<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $invest = $_POST['invest'];
    $rate = $_POST['rate'];
    $year = $_POST['year'];
    $submit = $_POST['submit'];
    if (isset($submit)) {
        $errors = [];
        foreach ($_POST as $key => $value) {
            if($key=='submit'){
                continue;
            };
            if (!is_numeric($value)) {
                $errors[] = "Please fill $key";
            }
        }
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Future Value Calculator</title>
    <style>
        #login {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        input {
            float: right;
            width: 20%;
            height: 20px;
            font-size: 16px;
        }

        input[type= submit] {
            align-self: center;
        }
    </style>
</head>
<body>
<div id="login">
    <h3>Future Value Calculator</h3>
    <form action="index.php" method="post">
        <div>
            <label>Inventment Amount</label>
            <input type="number" name="invest" value="<?= $invest ?>">
        </div>
        <div>
            <label>Yearly Interest Rate</label>
            <input type="number" name="rate" value="<?= $rate ?>">
        </div>
        <div>
            <label>Number of Years</label>
            <input type="number" name="year" value="<?= $year ?>">
        </div>
        <input type="submit" name="submit" value="Calculate">
    </form>
    <p>
        <?php
            if (!empty($errors)) {
                foreach ($errors as $value) {
                    echo $value."</br>";
                }
            } else{
                $result = ($invest + ($invest * $rate)) * $year;
                if($result){
                    echo "Your future value is ".$result;
                }

            }
        ?>
    </p>
</div>
</body>
</html>
