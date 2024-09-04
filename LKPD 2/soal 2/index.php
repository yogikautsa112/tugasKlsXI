<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Gaji Lembur</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method="post" id="lemburForm">
        <label for="lamaKerjaKaryawan">Lama Karyawan Bekerja (Jam):</label>
        <input type="number" id="lamaKerjaKaryawan" name="lamaKerjaKaryawan" required>
        
        <label for="jamLebih">Jam Lebih:</label>
        <input type="number" id="jamLebih" name="jamLebih" required>
        
        <button type="submit">Hitung Gaji Lembur</button>
    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $lamaKerja = 8;
        $lamaKerjaKaryawan = $_POST['lamaKerjaKaryawan'];
        $jamLebih = $_POST['jamLebih'];
        $gajiLembur = 0;

        if($lamaKerjaKaryawan > $lamaKerja) {
            $gajiLembur = 50000; 
            
            if ($jamLebih > 1) {
                $gajiLembur += ($jamLebih - 1) * 25000; 
            }
        }

        echo "<div>";
        echo "Lama Kerja: " . $lamaKerjaKaryawan . " Jam" ."<br>";
        echo "Jam Lebih: " . $jamLebih . " Jam" ."<br>";
        echo "Jumlah Kompensasi: Rp. " . number_format($gajiLembur, 0, ',', '.') . "\n";
        echo "</div>";
    }
    ?>
    </form>
</body>
</html>
