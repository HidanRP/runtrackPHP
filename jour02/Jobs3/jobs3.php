<?php
for ($i = 0 ; $i <= 100 ; $i++){
    if ($i <= 20){
        echo "<i>$i<br>";
    } elseif ($i == 42) {
        echo "LaPlateforme_<br>";
    } elseif ($i >=20 || $i >= 50) {
        echo "<u>$i<br>";
    } else {
        echo "$i <br>";
    }
}
?>