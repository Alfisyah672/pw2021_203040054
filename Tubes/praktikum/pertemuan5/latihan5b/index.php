<?php
require 'function.php';

$fashion = query("SELECT * FROM fashion")

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan4c</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body style="background-image: url(asset/img/concrete-texture.png);">
    <div class="container">
        <?php foreach($fashion as $fhs ) : ?>
            <p class="name">
                <a href="detail.php?id=<?= $fhs['id'] ?>" style="color: black;">
                    <?= $fhs["name"] ?>
                </a>
            </p>
        <?php endforeach; ?>
    </div>
</body>
</html>