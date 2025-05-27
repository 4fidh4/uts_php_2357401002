<?php
$array = [
    ["nama"=>"Asep", "grade"=>"A"],
    ["nama"=>"Icha", "grade"=>"A"],
    ["nama"=>"Shane", "grade"=>"C"],
    ["nama"=>"Jojo", "grade"=>"D"],
    ["nama"=>"Willy", "grade"=>"A"],
    ["nama"=>"Aby", "grade"=>"B"],
    ["nama"=>"Julie", "grade"=>"E"],
    ["nama"=>"Nate", "grade"=>"B"],
    ["nama"=>"Osi", "grade"=>"C"]
];

function getKeterangan($grade) {
    switch ($grade) {
        case "A": return "Sangat Baik";
        case "B": return "Baik";
        case "C": return "Cukup";
        case "D": return "Kurang";
        case "E": return "Buruk";
        default: return "-";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Grade Siswa</title>
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

    <h2>Grade dan Keterangan</h2>

    <table>
        <tr>
            <th>Nama</th>
            <th>Grade</th>
            <th>Keterangan</th>
        </tr>
        <?php foreach ($array as $data): ?>
        <tr>
            <td><?= $data["nama"] ?></td>
            <td><?= $data["grade"] ?></td>
            <td><?= getKeterangan($data["grade"]) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <a href="dashboard.php" class="back-button">← Kembali ke Menu Utama</a>

</body>
</html>
