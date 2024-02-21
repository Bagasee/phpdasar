<?php
$bioskop = [
    [
        "poster" => "godzila.jpg",
        "judul" => "Godzila - King Of The Monster",
        "rilis" => "2021",
        "durasi" => "2 jam",
        "genre" => "Action",
        "rating" => "9.0",
    ],
    [
        "poster" => "avenger.jpg",
        "judul" => "Avenger - end game",
        "rilis" => "2019",
        "durasi" => "3 jam",
        "genre" => "Action",
        "rating" => "9.1",
    ],
    [
        "poster" => "onepiece.jpg",
        "judul" => "One Piece RED",
        "rilis" => "2022",
        "durasi" => "2 jam",
        "genre" => "Anime",
        "rating" => "9.2",
    ],
    [
        "poster" => "jjk.jpg",
        "judul" => "Jujutsu Kaisen 0",
        "rilis" => "2022",
        "durasi" => "1 jam 30 menit",
        "genre" => "Anime",
        "rating" => "9.3",
    ],
    [
        "poster" => "spiderman.jpg",
        "judul" => "Spiderman - No Way Home",
        "rilis" => "2022",
        "durasi" => "2 jam 30  menit",
        "genre" => "Action",
        "rating" => "9.4",
    ],
    [
        "poster" => "beekeeper.jpg",
        "judul" => "Beekepper",
        "rilis" => "2024",
        "durasi" => "2 jam",
        "genre" => "Action",
        "rating" => "9.5",
    ],
    [
        "poster" => "godzilavskong.jpg",
        "judul" => "Godzila vs kong",
        "rilis" => "2022",
        "durasi" => "2 jam 30 menit",
        "genre" => "Action",
        "rating" => "9.6",
    ],
    [
        "poster" => "msmarvel.jpg",
        "judul" => "MS Marvel",
        "rilis" => "2023",
        "durasi" => "2 jam",
        "genre" => "Action",
        "rating" => "9.7",
    ],
    [
        "poster" => "antman.jpg",
        "judul" => "Antman - Quantum  Mania",
        "rilis" => "2023",
        "durasi" => "2 jam",
        "genre" => "Action",
        "rating" => "9.8",
    ],
    [
        "poster" => "insidious.jpg",
        "judul" => "Insidious - Red Dor",
        "rilis" => "2023",
        "durasi" => "2 jam",
        "genre" => "Horor",
        "rating" => "9.9",
    ]
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Film</title>
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
            width: 400px; 
            height: 400px; 
            margin: 10px;
        }
    </style>
</head>
<body>
<h1 class="judul">BIOSKOP</h1>

<?php foreach($bioskop as $b) : ?>
   <div class="border-box">
    <ul>
        <li>
            <img src="img/<?= $b["poster"]; ?>">
        </li>
        <li>Judul: <?= $b["judul"]; ?></li>
        <li>Rilis: <?= $b["rilis"]; ?></li>
        <li>Durasi: <?= $b["durasi"]; ?></li>
        <li>Genre: <?= $b["genre"]; ?></li>
        <li>Rating: <?= $b["rating"]; ?></li>
    </ul></div>

<?php endforeach ; ?>

    
</body>
</html>