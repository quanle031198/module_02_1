<?php
for ($x = 0; $x < 3; $x++) {
    echo "<br/>";
    for ($y = 0; $y < 7; $y++) {
        echo "*";
    }
}

echo "<br/>";

for ($i = 1; $i <= 6; $i++) {
    echo "<br/>";
    for ($j = 1; $j < $i; $j++) {
        echo "*";
    }
}

echo "<br/>";
for($i=5; $i>=1; $i--){
    echo "<br/>";
    for($j=1; $j<=$i; $j++){
        echo "*";
    }
}