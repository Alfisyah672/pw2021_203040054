<?php

session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}


require 'functions.php';

$id = $_GET['id'];

$fhs = query("SELECT * FROM fashion WHERE id = $id");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Produk</title>
  <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-all.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
</head>


<div class="container">

  <body style="padding:10px; background-image:url(asset/slider/bgdetail.png);">
    <h1 style="text-align: center; border:2px solid whitesmoke; width:30%; margin:50px 400px; border-radius:10px; padding:10px; font-family: 'Bebas Neue', cursive; background-image:url(asset/slider/bgdetailname.png);">Detail Produk</h1>
    <ul>
      <img src="asset/img/<?= $fhs['gambar']; ?>" width="250" height="200" style="border: 2px solid whitesmoke; margin:auto 425px; padding:10px;"><br><br>
      <p>Nama :</p><?= $fhs['nama']; ?><br>
      <p>Harga :</p><?= $fhs['harga']; ?><br>
      <p>Deskripsi :</p><?= $fhs['deskripsi']; ?><br>
      <p>Stok :</p><?= $fhs['stok']; ?><br><br>

      <button style="float: right; display:block;" class="button shadowed rounded secondary">
        <a href=" index.php" style="color: white;">Kembali Ke Daftar Produk</a>
      </button><br><br>

    </ul>
  </body>
  <footer style="background-image:url(asset/slider/bg9.png);">
    <div class="container" style="text-align: center; height:70px; padding:25px; color:white; font-family: 'Goblin One', cursive;">
      <p>Copyright &copy; 2021 - StoreSell By Alfi Syahrin R.</p>
    </div>
  </footer>
</div>

</html>