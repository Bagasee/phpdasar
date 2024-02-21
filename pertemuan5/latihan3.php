<?php
$mahasiswa = [["bagas","00001","TI","coding"],
              ["shinta","00002","Ilkom","main"],
              ["blek","00003","TekDus","ngopi"],
              ["harsya","00004","Management","dagang"],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 3</title>
    <h1>DAFTAR MAHASISWA</h1>

</head>
<body>
<?php foreach($mahasiswa as $msh) :?>
<ul>
    <li>Nama : <?= $msh[0];?></li>
    <li>ID : <?= $msh[1];?></li>
    <li>Jurusan : <?= $msh[2];?></li>
    <li>Hobi : <?= $msh[3];?></li>
</ul>
<?php endforeach; ?>
    
</body>
</html>