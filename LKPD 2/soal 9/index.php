<?php 
$uang = 140500;
$pecahan = [100000, 50000, 20000, 10000, 5000, 2000, 1000, 500];
$hasil = [];

foreach ($pecahan as $p) {
    $hasil[$p] = floor($uang / $p);
    $uang %= $p;
}

foreach($hasil as $P => $lembar) {
    echo "Rp. ".number_format($P, 0, "," , ".").": ".$lembar." lembar";
    echo "<br>";
}