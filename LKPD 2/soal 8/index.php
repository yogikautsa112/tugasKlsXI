<?php 
$arr = [80, 90, 100, 85, 100, 66];
$find = 100;

$result = array_keys($arr, $find);
// Pertama, kita menggunakan fungsi array_keys($arr, $find) untuk mencari indeks (kunci) dari setiap kemunculan angka 100 dalam array.

if (count($result) > 0) {
    echo "jumlah angka $find = " . count($result) ;
} else {
    echo "Tidak ada dalam array";
}