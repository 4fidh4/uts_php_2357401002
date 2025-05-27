<?php
$profil = [
    "NIS" => "2357401002",
    "Nama" => "Afidha Hawash Mustafidha",
    "Kelas" => "MI23",
    "Jenis Kelamin" => "Perempuan",
    "Email" => "fidahviia@gmail.com",
    "Nomor Handphone" => "087720100632"
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Profil Diri</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            padding: 40px;
        }
        h2 {
            color: #333;
        }
        ul {
            list-style: none;
            padding: 0;
            margin-top: 20px;
        }
        li {
            background: #fff;
            margin-bottom: 10px;
            padding: 10px 15px;
            border-radius: 6px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .back-button {
            display: inline-block;
            margin-top: 30px;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }
        .back-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <h2>Profil Diri</h2>
    <ul>
        <?php foreach ($profil as $key => $value): ?>
            <li><strong><?= $key ?>:</strong> <?= $value ?></li>
        <?php endforeach; ?>
    </ul>

    <a href="dashboard.php" class="back-button">← Kembali ke Menu Utama</a>

</body>
</html>
