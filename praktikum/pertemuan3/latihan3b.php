<?php

// Nama : Alfi Syahrin Rachmat
 // Nrp : 203040054
 // Shift : PW Jumat Kelas B 10.00 - 11.00 -->


$pemainBola = [
    [
        "nama1" => "Mohammad salah",
        "nama2" => "Cristiano Ronaldo",
        "nama3" => "Lionel Messi",
        "nama4" => "Zlatan Ibrahimmovic",
        "nama5" => "Neymar Jr"


    ]
    ];

$pemainbolabaru = [
    [
        "namapemain1" => "Cristiano Ronaldo",
        "namapemain2" => "Lionel Messi",
        "namapemain3" => "Luca Modric",
        "namapemain4" => "Mohammad Salah",
        "namapemain5" => "Neymar Jr",
        "namapemain6" => "Sadio Mane",
        "namapemain7" => "Zlatan Ibrahimovic"


    ]
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3b</title>
</head>
<body>
    <h1>Daftar Pemain Bola Terkenal :</h1>

    <?php foreach( $pemainBola as $p) : ?>
    <ul>
        <li>1. <?= $p["nama1"]; ?></li>
        <li>2. <?= $p["nama2"]; ?></li>
        <li>3. <?= $p["nama3"]; ?></li>
        <li>4. <?= $p["nama4"]; ?></li>
    </ul>
    <?php endforeach; ?>

    <h1>Daftar Pemain Bola baru :</h1>
        <?php foreach( $pemainbolabaru as $pb) : ?>
    <ul>
        <li>1. <?= $pb["namapemain1"]; ?></li>
        <li>2. <?= $pb["namapemain2"]; ?></li>
        <li>3. <?= $pb["namapemain3"]; ?></li>
        <li>4. <?= $pb["namapemain4"]; ?></li>
        <li>5. <?= $pb["namapemain5"]; ?></li>
        <li>6. <?= $pb["namapemain6"]; ?></li>
        <li>7. <?= $pb["namapemain7"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>