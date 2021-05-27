<?php

    if ( !isset($_GET['id'])) {
        header("location: index.php");
        exit;
    }

require 'function.php';

$id = $_GET['id'];

$fashion = query("SELECT * FROM fashion WHERE id = $id")[0];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan4c</title>
</head>
<body style="background-image: url(asset/img/darkness.png);">
    <div class="container">
        <div><img src="asset/img/<?= $fashion["image"]; ?>" alt="" width="200">
        </div>
        <div class="keterangan">
            <li style="color: whitesmoke;"><?= $fashion["name"]; ?></li>
            <li style="color: whitesmoke;"><?= $fashion["price"]; ?></li>
            <li style="color: whitesmoke;"><?= $fashion["description"]; ?></li>
            <li style="color: whitesmoke;" ><?= $fashion["stok"]; ?></li>
        </div>
           

        <button style="background-color: black;"><a href="index.php" style="color: blue;">kembali</a></button>
    </div>
</body>
</html>