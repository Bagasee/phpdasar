<?php

require 'function.php';

$id = $_GET["id"];

$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];


if( isset($_POST["submit"])){


    if( ubah ($_POST) >  0 ){
        echo "
            <script>
                alert('data berhasil diubah');
                document.location.href = 'index.php'
            </script>
        ";
    }else {
        echo "
            <script>
                alert('data gagal diubah');
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
    <title>ubah Data Mahasiswa</title>
</head>
<body>
    <h1>Ubah Data Mahasiswa</h1>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
        <ul>
            <li>
                <label for="nrp">NRP : </label>
                <input type="text" name="nrp" id="nrp" pattern="\d+" value="<?= $mhs["nrp"]; ?>"
                 required>
            </li>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" pattern="[A-Za-z ]+" value="<?= $mhs["nama"]; ?>"
                required>
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="email" name="email" id="email" value="<?= $mhs["email"]; ?>"
                required>
            </li>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan" pattern="[A-Za-z ]+" value="<?= $mhs["jurusan"]; ?>"
                required>
            </li>
            <li>
                <label for="gambar">Gambar : </label>
                <input type="text" name="gambar" id="gambar" value="<?= $mhs["gambar"]; ?>"
                required>
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data</button>
            </li>
        </ul>


    </form>
</body>
</html>