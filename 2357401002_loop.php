<?php
$nim = "2357401002";
$nama = "Afidha Hawash Mustafidha";

for ($i = 1; $i <= 1000; $i++) {
    echo "($i) $nim $nama<br>";
}
?>
<?php
$nim = "2357401002";
$nama = "Afidha Hawash Mustafidha";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Loop NIM</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 30px;
            background-color: #f8f9fa;
        }
        h2 {
            color: #333;
            margin-bottom: 20px;
        }
        .output {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            max-height: 500px;
            overflow-y: scroll;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .output p {
            margin: 0;
            padding: 2px 0;
        }
        .back-button {
            display: inline-block;
            margin-top: 25px;
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

    <h2>Loop 1000x NIM & Nama</h2>

    <div class="output">
        <?php
        for ($i = 1; $i <= 1000; $i++) {
            echo "<p>($i) $nim $nama</p>";
        }
        ?>
    </div>

    <a href="dashboard.php" class="back-button">← Kembali ke Menu Utama</a>

</body>
</html>
