<?php
$array = [
    ["nama"=>"Asep", "nilai"=>78],
    ["nama"=>"Icha", "nilai"=>89],
    ["nama"=>"Shane", "nilai"=>45],
    ["nama"=>"Jojo", "nilai"=>67],
    ["nama"=>"Willy", "nilai"=>85],
    ["nama"=>"Aby", "nilai"=>70],
    ["nama"=>"Julie", "nilai"=>100],
    ["nama"=>"Nate", "nilai"=>66],
    ["nama"=>"Osi", "nilai"=>83]
];

function getGrade($nilai) {
    if ($nilai >= 85) return "A";
    elseif ($nilai >= 75) return "B";
    elseif ($nilai >= 65) return "C";
    elseif ($nilai >= 55) return "D";
    else return "E";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Nilai</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 40px;
            background-color: #f0f2f5;
        }
        h2 {
            color: #333;
            margin-bottom: 20px;
        }
        table {
            width: 60%;
            border-collapse: collapse;
            background-color: #fff;
            margin-bottom: 30px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        th, td {
            padding: 10px 15px;
            border: 1px solid #ccc;
            text-align: center;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .back-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        .back-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <h2>Daftar Nilai Siswa</h2>

    <table>
        <tr>
            <th>Nama</th>
            <th>Nilai</th>
            <th>Grade</th>
        </tr>
        <?php foreach ($array as $data): ?>
        <tr>
            <td><?= $data["nama"] ?></td>
            <td><?= $data["nilai"] ?></td>
            <td><?= getGrade($data["nilai"]) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <a href="dashboard.php" class="back-button">← Kembali ke Menu Utama</a>

</body>
</html>
