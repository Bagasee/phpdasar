<?php
$hari=  array("senin","selasa","rabu","kamis","jumat","sabtu","minggu");
$bulan = ["jan","feb","mar","aprl","may","jun"];
$rndm = [01,"bagas","tulisan","false"];

//menampilkan array
//var_dump() , print_r()
// var_dump($hari);
// echo "<br";
// print_r($bulan);

//menampilkan 1 elemen pada array
// echo $rndm[2];
// echo "<br>";
// var_dump($rndm);

//cara menambahkan array diluar array
var_dump($bulan);
$bulan [] = "jul"; 
$bulan [] = "aug"; 
$bulan [] = "sep"; 
var_dump($bulan);


?>