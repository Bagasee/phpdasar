<?php
session_start();

if( !isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'function.php';
if( isset($_POST["submit"])){


    if(tambah ($_POST) >  0 ){
        echo "
            <script>
                alert('data berhasil ditambah');
                document.location.href = 'index.php'
            </script>
        ";
    }else {
        echo "
            <script>
                alert('data gagal ditambah');
                document.location.href = 'index.php'
            </script>
    ";
    };
};

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="nrp">NRP : </label>
                <input type="text" name="nrp" id="nrp" pattern="\d+"
                 required>
            </li>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" pattern="[A-Za-z ]+"
                required>
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="email" name="email" id="email"
                required>
            </li>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan" pattern="[A-Za-z ]+"
                required>
            </li>
            <li>
                <label for="gambar">Gambar : </label>
                <input type="file" name="gambar" id="gambar"
                required>
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>


    </form>
</body>
</html>