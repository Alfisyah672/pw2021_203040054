<?php

$db = mysqli_connect("localhost", "root", "");

mysqli_select_db($db, "pw_tubes_203040054");

$result = mysqli_query($db, "SELECT * FROM fashion");





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan4a</title>
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-all.min.css">
</head>
<body>
    <table class="table table-border cell-border">
            <tr class="yellow">
                <th>No</th>
                <th>Edit</th>
                <th>Image</th>
                <th>Nama</th>
                <th>Price</th>
                <th>Description</th>
                <th>Stok</th>
            </tr>
        <?php $i = 1?>
        <?php while( $row = mysqli_fetch_assoc($result) ) : ?>
            <tr>
                <td class="dark"><?= $i ?></td>
                <td>
                    <a href="" style="color: blue;">Ubah</a> |
                    <a href="" style="color: red;">Hapus</a>
                </td>
                <td class="info"><img src="asset/img/<?php echo $row["image"] ?>" width="100"></td>
                <td><?= $row["name"]; ?></td>
                <td><?= $row["price"]; ?></td>
                <td><?= $row["description"]; ?></td>
                <td class="primary"><?= $row["stok"]; ?></td>

            </tr>
            <?php $i++ ?>
            <?php endwhile; ?>
        </table>
</body>
</html>