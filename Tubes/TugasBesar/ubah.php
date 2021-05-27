<?php

session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

// jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("Location: admin.php");
  exit;
}

// ambil id dari url
$id = $_GET['id'];

// query mahasiswa berdasarkan id
$fhs = query("SELECT * FROM fashion WHERE id = $id");


if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
          alert('data berhasil diubah');
          document.location.href = 'admin.php';
          </script>";
  } else {
    echo "data gagal diubah";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data Produk</title>
  <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-all.min.css">
</head>

<body>
  <h3>Ubah Data Produk</h3>
  <form action="" method="POST" style="width: 50%;" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $fhs['id']; ?>">
    <ul>
      <img src="asset/img/<?= $fhs['gambar']; ?>" width="120" style="display: block;" class="img-preview"><br>
      <label>
        Nama :
        <input type="text" name="nama" autofocus autocomplete="off" required value="<?= $fhs['nama']; ?>" class="metro-input">
      </label><br><br>

      <input type="hidden" name="gambar_lama" value="<?= $fhs['gambar']; ?>">
      <label>
        Image :
        <input type="file" name="gambar" onchange="previewImage()" class="gambar">
      </label><br><br>

      <label>
        Price :
        <input type="text" name="harga" autofocus autocomplete="off" required value="<?= $fhs['harga']; ?>" class="metro-input">
      </label><br><br>


      <label>
        Description :
        <input type="text" name="deskripsi" autofocus autocomplete="off" required value="<?= $fhs['deskripsi']; ?>" class="metro-input">
      </label><br><br>

      <label>
        Stok :
        <input type="text" name="stok" autofocus autocomplete="off" required value="<?= $fhs['stok']; ?>" class="metro-input">
      </label><br><br>


      <button class="button warning small rounded" type="submit" name="ubah">Ubah Data!</button>
      <button class="button small outline rounded"><a href="admin.php" style="color: black;">Kembali</a></button>

    </ul>

  </form>
  <footer style="background-image:url(asset/slider/bg9.png);">
    <div class="container" style="text-align: center; height:70px; padding:25px; color:white; font-family: 'Goblin One', cursive;">
      <p>Copyright &copy; 2021 - StoreSell By Alfi Syahrin R.</p>
    </div>
  </footer>
  <script src="js/script.js"></script>
</body>

</html>