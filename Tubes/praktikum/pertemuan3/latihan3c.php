<?php


$pemainbola = [
    
    [
        "nama1" => "juventus",
        "nama2" => "Barcelona",
        "nama3" => "Real Madrid",
        "nama4" => "Liverpool",
        "nama5" => "Paris Saint Germain",
        "nama6" => "Liverpool",
        "nama7" => "Ac Milan"
    ]

    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3c</title>
    <style>
        div{
            border: 2px solid black;
            font-family: arial;
        }
    
    </style>
</head>
<body>
    <div>
        <h1>Daftar pemain bola terkenal dan clubnya</h1>
        <?php foreach( $pemainbola as $pb) : ?>
        <ul>
            <li>Cristiano Ronaldo : <?= $pb["nama1"]; ?></li>
            <li>Lionel Messi : <?= $pb["nama2"]; ?></li>
            <li>Luca Modric : <?= $pb["nama3"]; ?></li>
            <li>Mohammad Salah : <?= $pb["nama4"]; ?></li>
            <li>Neymar Jr : <?= $pb["nama5"]; ?></li>
            <li>Sadio Mane : <?= $pb["nama6"]; ?></li>
            <li>Zlatan Ibrahimovic : <?= $pb["nama7"]; ?></li>
        </ul>
    <?php endforeach ?>
    </div>
</body>
</html>