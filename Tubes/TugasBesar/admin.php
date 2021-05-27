<?php

session_start();

if (isset($_SESSION['LoginAdmin'])) {
    header("Location: LoginAdmin.php");
    exit;
}

require 'functions.php';

if (isset($_POST['cari'])) {
    $fashion = cari($_POST['keyword']);
}

$fashion = query("SELECT * FROM fashion");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StoreSell</title>
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
</head>


<div class="container">
    <div style="margin-left:32%; padding: 20px; font-family: 'Josefin Sans', sans-serif;">
        <h1>Database StoreSell</h1>
    </div>

    <body style="background-image: url(asset/slider/bgadmin.png);">

        <div style="padding: 15px; float:left; display:block;">
            <button class="button secondary default rounded">
                <a href="tambah.php" style="color: white;">Tambah Data</a>
            </button>
        </div>

        <div style="padding: 15px;">
            <button class="button alert default rounded shadowed" style="float: right; display:block;">
                <a href="LogoutAdmin.php" style="color: white;">Logout</a>
            </button>
        </div>

        <div style=" margin-left:25%; padding-bottom:25px;">
            <form action="" method="POST">
                <input type="text" name="keyword" autofocus size="30" placeholder="Masukan keyword pencarian" autocomplete="off" style="width:70%;">
                <button type="submit" name="cari" class="btn waves-effect waves-light orange">Cari!</button>
            </form>
        </div>

        <table style="background-image: url(asset/img/memphis-mini.png);" class="table table-border">
            <tr style="text-align: center;">
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
            <?php endif; ?>

            <?php $i = 1 ?>
            <?php foreach ($fashion as $fhs) : ?>
                <tr style="text-align: center;">
                    <td><?= $i ?></td>
                    <td class="edit">
                        <button class="button shadowed"><a href="ubah.php?id=<?= $fhs['id']; ?>" style="color: black;">Ubah</a></button> <br><br>
                        <button class="button shadowed warning"><a href="hapus.php?id=<?= $fhs['id']; ?>" onclick="return confirm('Hapus Data??')" style="color: white;">Hapus</a></button>
                    </td>
                    <td><img src="asset/img/<?php echo $fhs["gambar"] ?>" width="100"></td>
                    <td><?= $fhs["nama"]; ?></td>
                    <td><?= $fhs["harga"]; ?></td>
                    <td><?= $fhs["deskripsi"]; ?></td>
                    <td><?= $fhs["stok"]; ?></td>

                </tr>
                <?php $i++ ?>
            <?php endforeach; ?>

        </table>
        <footer style="background-image:url(asset/slider/bg9.png);">
            <div class="container" style="text-align: center; height:70px; padding:25px; color:white; font-family: 'Goblin One', cursive;">
                <p>Copyright &copy; 2021 - StoreSell By Alfi Syahrin R.</p>
            </div>
        </footer>
</div>
<script src="js/script.js"></script>

</body>

</html>