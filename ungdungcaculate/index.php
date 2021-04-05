<?php 
if($second_operand == 0){

}
function calculate($first_operand, $operator, $second_operand)
    {
        switch ($operator) {
            case '+':
                echo "Tổng là: " . (((float)$first_operand) + ((float)$second_operand));
                break;
            case '-':
                echo "Hiệu là: " . (((float)$first_operand) - ((float)$second_operand));
                break;
            case '*':
                echo "Tích là: " . (((float)$first_operand) * ((float)$second_operand));
                break;
            case '/':
                if($second_operand != 0)
                {
                    echo "Thương là: " . (((float)$first_operand) / ((float)$second_operand));
                }
                else{
                    echo "không tính được!";
                }
                break;
        }
    } ?>
<!DOCTYPE html>
<html>

<head>
    <title>[Bài tập] Ứng dụng Calculator</title>
</head>

<body>
    <h2>Simple Caculator</h2>
    <form method="POST">
        <fieldset>
            <legend>Caculator</legend>
            <table>
                <tr>
                    <td>First operand: </td>
                    <td><input type="number" name="first_operand" /></td>
                </tr>
                <tr>
                    <td>Operator</td>
                    <td>
                        <select name="operator">
                            <option value="+">+</option>
                            <option value="-">-</option>
                            <option value="*">*</option>
                            <option value="/">/</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Second operand: </td>
                    <td><input type="number" name="second_operand" /></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="caculate" /></td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_operand = $_POST['first_operand'];
    $operator = $_POST['operator'];
    $second_operand = $_POST['second_operand'];

   
    
    calculate($first_operand, $operator, $second_operand);
}


?>

</html>