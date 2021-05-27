<?php
require 'functions.php';

if (isset($_POST['registrasiAdmin'])) {
  if (registrasiAdmin($_POST) > 0) {
    echo "<script>
            alert('user baru berhasil di tambahkan. silahkan login guyss');
            document.location.href = 'registrasiAdmin.php';
            </script>";
  } else {
    echo 'user gagal ditambahkan';
  }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrasi Admin</title>
  <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-all.min.css">
</head>

<body>
  <h3>Form Registrasi Admin</h3>
  <form action="" method="POST">
    <ul>
      <li>
        <label>
          Username :
          <input type="username" name="username" autocomplete="off" autofocus required>
        </label>
      </li>
      <li>
        <label>
          Password :
          <input type="password" name="password1" required>
        </label>
      </li>
      <li>
        <label>
          Konfirmasi Password :
          <input type="password" name="password2" required>
        </label>
      </li>
      <li>
        <button type="submit" name="registrasiAdmin">Registrasi</button>
        <a href="LoginAdmin.php" style="color: blue;">Kembali</a>
      </li>
    </ul>
  </form>
</body>

</html>