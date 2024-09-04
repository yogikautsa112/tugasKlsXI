<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori Usia</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Kategori Usia</h1>
        <div class="result">
            <?php
            $data = [12, 15, 17, 20, 25, 30, 35, 40, 45, 50];
            $anakAnak = 0;
            $dewasa = 0;

            foreach ($data as $umur) {
                if ($umur >= 17) {
                    $dewasa++;
                } else {
                    $anakAnak++;
                }
            }

            $data = array_map(function ($umur) {
                return $umur . " tahun";
            }, $data);

            echo "List Usia: " . implode(", ", $data) . "<br>";
            echo "Jumlah Kategori Dewasa: <b>$dewasa</b><br>";
            echo "Jumlah Kategori Anak-Anak: <b>$anakAnak</b><br>";
            ?>
        </div>
    </div>
</body>
</html>
