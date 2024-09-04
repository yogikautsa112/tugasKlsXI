<?php 

for ($i = 1; $i <= 2; $i++) {
    for ($j = 10; $j >= 1; $j--) {
        $hasil = $j * $i;
        echo "$j x $i = " . $hasil . "<br>";
    }
    echo "<br>";
}