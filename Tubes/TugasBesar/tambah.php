<?php

session_start();

if (!isset($_SESSION['login'])) {
  header("Location: tambah.php");
  exit;
}

require 'functions.php';


if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
          alert('data berhasil ditambahkan');
          document.location.href = 'admin.php';
          </script>";
  } else {
    echo "data gagal ditambahkan";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Produk</title>
  <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-all.min.css">
</head>

<body>
  <h3>Tambah Data Produk</h3>
  <form action="" method="POST" enctype="multipart/form-data" style="width: 50%; margin:30px 20px;">
    <ul>

      <img src="asset/img/nophoto.jpg" width="120" style="display: block;" class="img-preview"><br>
      <label>
        Nama :
        <input type="text" name="nama" autofocus autocomplete="off" required class="metro-input">
      </label>
      <br><br>
      <label>
        Image :
        <input type="file" name="gambar" class="gambar" onchange="previewImage()">
      </label>
      <br><br>

      <label>
        Price :
        <input type="text" name="harga" autofocus autocomplete="off" required class="metro-input">
      </label>
      <br><br>

      <label>
        Description :
        <input type="text" name="deskripsi" autofocus autocomplete="off" required class="metro-input">
      </label>
      <br><br>

      <label>
        Stok :
        <input type="text" name="stok" autofocus autocomplete="off" required class="metro-input">
      </label>
      <br><br>

      <button class="button dark small rounded" type="submit" name="tambah">Tambah Data!</button>
      <button class="button small outline rounded"><a href="admin.php" style="color: black;">Kembali</a></button>

    </ul>

  </form>

  <script src="js/script.js"></script>

</body>

</html>