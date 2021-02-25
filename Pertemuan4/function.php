<?php
/*
Alfi Syahrin Rachmat
203040054
https://github.com/Alfisyah672/pw2021_203040054
Pertemuan 4, 25 Februari 2021
Mempelajari mengenai Function
Date untuk menampilkan tanggal dengan format tertentu
*/

function salam($waktu = "Datang", $nama = "Als.R") {
    return "Selamat $waktu, $nama!!";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Function</title>
</head>
<body>
    <h1><?= salam("pagi","Alfi Syahrin"); ?></h1>
</body>
</html>