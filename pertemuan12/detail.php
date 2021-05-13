<?php

session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}


require 'functions.php';

$id = $_GET['id'];

$m = query("SELECT * FROM mahasiswa WHERE id = $id");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mahasiswa</title>
</head>

<body>
  <h3>Detail Mahasiswa</h3>
  <ul>
    <li><img src="img/<?= $m['gambar']; ?>"></li>
    <li><?= $m['nrp']; ?></li>
    <li><?= $m['nama']; ?></li>
    <li><?= $m['email']; ?></li>
    <li><?= $m['jurusan']; ?></li>
    <li><a href="ubah.php?id=<?= $m['id']; ?>">Ubah</a>
      <a href="hapus.php?id=<?= $m['id']; ?>" onclick="return confirm ('apakah anda yakin hapus data?');">Hapus</a>
    </li>
    <li><a href=" index.php">Kembali Ke Daftar Mahasiswa</a>
    </li>
  </ul>
</body>

</html>