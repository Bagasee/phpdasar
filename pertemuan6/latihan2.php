<?php 


// $mahasiswa = [["bagas","2220010061","Teknik Informatika","bags@gmail.com"],
//               ["3330010061","shinta","Ilmu Komunikasi","shinta@gmail.com"]];

//array assosiative
//key nya kita buat sendiri

$mahasiswa = [["nama" => "shinta",
              "nim" => "3330010061",
              "jurusan" => "Ilmu Komunikasi",
              "email" => "shinta@gmail.com",
              "gambar" => "shintaaa.jpg"
            ],

              ["nama" => "Bagas",
              "nim" => "2220010061",
              "jurusan" => "Teknik Informatika",
              "email" => "bagas@gmail.com",
              "gambar" => "bagas.jpg"]
            ];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <style> 
        body {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }
        .judul {
            width: 100%; 
            text-align: center; 
        }
        .border-box {
            border: 2px solid #333; 
            text-align: center;            
            padding: 20px; 
            width: 480px; 
            height: 480px; 
            margin: 10px;
        }
    </style>
</head>
<body>
    <h1 class="judul">Daftar Mahasiswa</h1>

<?php foreach($mahasiswa as $mhs) : ?>

    <ul class="border-box">
        <li>
            <img src="img/<?= $mhs["gambar"]; ?>">"
        </li>
        <li>Nama : <?= $mhs["nama"]; ?></li>
        <li>NIM : <?= $mhs["nim"]; ?></li>
        <li>jurusan : <?= $mhs["jurusan"]; ?></li>
        <li>Email : <?= $mhs["email"]; ?></li>
    </ul>

    <?php endforeach ; ?>
</body>
</html>


