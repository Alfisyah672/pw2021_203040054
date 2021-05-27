<?php
require 'functions.php';

$id = $_GET['id'];
$fhs = query("SELECT * FROM fashion WHERE id = $id");

if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                alert('Data Berhasil Di Ubah);
                document.location.href = 'admin.php';
                </script>";
    } else {
        echo "<script>
                alert('Data Gagal Di Ubah! ') 
                document.location.href = 'admin.php';
                </script>";
    }
}
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
</head>
<body>
<h3>Ubah Data Produk</h3>
<form action="" method="post">
    <input type="hidden" name="id" value="<?= $fhs['id']; ?>">
    <ul>
        <li>
            <label> Nama :
            <input type="text" name="name" id="name" required value="<?= $fhs['name']; ?>">
            </label>
        </li>
        <li>
            <label>Image :
            <input type="text" name="image" id="image" required value="<?= $fhs['image']; ?>">
            </label>
        </li>
        <li>
            <label>Price :
            <input type="text" name="price" id="price" required value="<?= $fhs['price']; ?>">
            </label>
        </li>
        <li>
            <label>Description :
            <input type="text" name="description" id="description" required value="<?= $fhs['description']; ?>">
            </label>
        </li>
        <li>
            <labe>Stok :
            <input type="text" name="stok" id="stok" required value="<?= $fhs['stok']; ?>">
            </label>
        </li>
        <button type="submit" name="tambah" class="btn waves-effect waves-light red">ubah Data</button>
        <button type="submit"class="btn waves-effect waves-light white" >
            <a href="admin.php" style="text-decoration: none; color: black;">Kembali</a>
        </button>
    </ul>
</form>
</body>
</html>

