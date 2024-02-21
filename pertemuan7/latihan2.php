<?php
if( !isset ($_GET["judul"]) || 
    !isset($_GET["rilis"]) || 
    !isset($_GET["durasi"]) || 
    !isset($_GET["genre"]) || 
    !isset($_GET["rating"]) || 
    !isset($_GET["poster"])) {
    header("Location: latihan1.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>
<h1>Detail Film</h1>
<ul>
    <li><img src="C:\xampp\htdocs\phpdasar\pertemuan7\img<?= $_GET["poster"]; ?>"></li>
    <li><?= $_GET["judul"]; ?></li>
    <li><?= $_GET["rilis"]; ?></li>
    <li><?= $_GET["durasi"]; ?></li>
    <li><?= $_GET["genre"]; ?></li>
    <li><?= $_GET["rating"]; ?></li>

</ul>

<a href="latihan1.php">kembali ke daftar</a>
    
</body>
</html>