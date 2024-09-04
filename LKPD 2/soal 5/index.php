<?php
$array1 = [80, 77, 65, 89, 55, 12, 90, 86];
$array2 = [77, 99, 55, 81, 45, 90, 91, 98];

$result = array_intersect($array1, $array2);
// membandingkan lalu me-return beberapa nilai yang sama

echo "Bilangan yang ada di kedua variabel";
foreach ($result as $value) {
    echo"<br>" . $value;
}

$result = array_diff($array1, $array2);
// membandingkan lalu me-return beberapa nilai yang tidak sama dari kedua variabel tersebut

echo "<br>";
echo "<br>";
echo "bilangan yang tidak sama di kedua variabel";
foreach ($result as $value) {
    echo" <br> " . $value;
}