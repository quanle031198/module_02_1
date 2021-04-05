<?php
if($_SERVER['REQUEST_METHOD']== 'POST'){
    $prd_description = $_POST["prd_description"];
    $price = $_POST["price"];
    $discount = $_POST["discount"];
}
 $discount_amount = $price * $discount * 0.1;
 $discount_price = $price - $discount_amount;

 echo "Mô tả sản phẩm: " .$prd_description. "<br/>".
        "Lượng chiết khấu: " .$discount_amount . "<br/>".
        "Giá sau khi đã được chiết khấu: ". $discount_price. "<br/>";
?>
