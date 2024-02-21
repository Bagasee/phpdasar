<?php
//$_GET

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
    ]];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
<h1>Latihan GET</h1>
<ul>
    <?php foreach ($bioskop as $b) : ?> 
        <li> 
            <a href="latihan2.php?judul=<?= $b["judul"]; ?>&rilis=<?= $b["rilis"];?> &durasi= <?= $b["durasi"]; ?> &genre= <?= $b["genre"]; ?> &rating= <?= $b["rating"]; ?> &poster= <?= $b["poster"]; ?>">
            <?= $b["judul"]; ?></a>
        </li>
    <?php endforeach ;  ?>
</ul>

    
</body>
</html>