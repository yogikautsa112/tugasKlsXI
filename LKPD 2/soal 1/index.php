<?php
$text = "Selamat ulang tahun yang Ke-17";

$number = preg_replace('/[^0-9]/', '', $text);
// preg_replace('/[^0-9]/', '', $text) untuk menghapus/mengganti/mereplace semua karakter selain angka dari teks tersebut.
if ($number) {
    $arrNumber = str_split($number, 1);
    // Jika hasil dari operasi ini mengandung angka, kita memecahnya menjadi array dengan menggunakan str_split($number, 1)
    echo "Teks mengandung angka : " . implode(", ", $arrNumber);
} else {
    echo "Teks tidak mengandung angka";
}