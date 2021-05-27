<?php

require 'function.php';

$fashion = query("SELECT * FROM fashion");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StoreSell</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
    <button class="btn waves-effect waves-light blue">
        <a href="tambah.php" style="color: white;">Tambah Data</a>
    </button>

    <form action="" method="GET">
        <input type="text" name="keyword" autofocus>
        <button type="submit" name="cari" class="btn waves-effect waves-light orange">Cari!</button>
    </form>
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
        <?php if (empty($fashion)) : ?>
            <tr>
                <td colspan="7">
                    <h1>Data Tidak Ditemukan</h1>
                </td>
            </tr>
        <?php else : ?>

        <?php $i = 1?>
        <?php foreach($fashion as $fhs ) : ?>
            <tr>
                <td><?= $i ?></td>
                <td class="edit">
                    <a href="ubah.php?id=<? $fhs['id'] ?>" style="color: blue;">Ubah</a> |
                    <a href="hapus.php?id=<? $fhs['id'] ?>" onclick="return confirm('Hapus Data??')" style="color: red;">Hapus</a>
                </td>
                <td><img src="asset/img/<?php echo $fhs["image"] ?>" width="100"></td>
                <td><?= $fhs["name"]; ?></td>
                <td><?= $fhs["price"]; ?></td>
                <td><?= $fhs["description"]; ?></td>
                <td><?= $fhs["stok"]; ?></td>

            </tr>
            <?php $i++ ?>
            <?php endforeach; ?>
        <?php endif; ?>
        </table>
</body>
</html>