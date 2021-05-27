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
    <title>Latihan4b</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
    <table class="centered" style="background-image: url(asset/img/memphis-mini.png);">
            <tr>
                <th>No</th>
                <th>Edit</th>
                <th>Image</th>
                <th>Nama</th>
                <th>Price</th>
                <th>Description</th>
                <th>Stok</th>
            </tr>
        <?php $i = 1?>
        <?php foreach($fashion as $fhs ) : ?>
            <tr>
                <td><?= $i ?></td>
                <td class="edit">
                    <a href="" style="color: blue;">Ubah</a> |
                    <a href="" style="color: red;">Hapus</a>
                </td>
                <td><img src="asset/img/<?php echo $fhs["image"] ?>" width="100"></td>
                <td><?= $fhs["name"]; ?></td>
                <td><?= $fhs["price"]; ?></td>
                <td><?= $fhs["description"]; ?></td>
                <td><?= $fhs["stok"]; ?></td>

            </tr>
            <?php $i++ ?>
            <?php endforeach; ?>
        </table>
</body>
</html>