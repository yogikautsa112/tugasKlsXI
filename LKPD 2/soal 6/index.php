<?php

$students = [
    [
        'nama' => 'Andi',
        'nilai' => [80,78,82,78,88]
    ],
    [
        'nama' => 'Beni',
        'nilai' => [86,70,80,85,81]
    ],
    [
        'nama' => 'Dani',
        'nilai' => [83,91,70,73,81]
    ],
    [
        'nama' => 'Eko',
        'nilai' => [89,85,84,86,88]
    ]
];

foreach ($students as &$student) {
    $student['total_nilai'] = array_sum($student['nilai']) / count($student['nilai']);
}
unset($student)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Scores</title>
    <style>
        body {
            font-family: "Poppins", sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        table {
            border-collapse: collapse;
            width: 50%;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #4C7CAF;
            color: white;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Nama</th>
            <th>Nilai Rata-rata</th>
        </tr>
        <?php foreach ($students as $student): ?>
        <tr>
            <td><?php echo $student['nama']; ?></td>
            <td><?php echo $student['total_nilai']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
