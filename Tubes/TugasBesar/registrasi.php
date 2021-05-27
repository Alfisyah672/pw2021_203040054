<?php
require 'functions.php';

if (isset($_POST['registrasi'])) {
  if (registrasi($_POST) > 0) {
    echo "<script>
            alert('user baru berhasil di tambahkan. silahkan login guyss');
            document.location.href = 'login.php';
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
  <title>Registrasi</title>
  <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-all.min.css">
</head>

<body>

  <form action="" method="POST" style="width: 50%; margin:30px 20px;">
    <h3>Form registrasi</h3>
    <ul>

      <label>
        Username :
        <input type="username" name="username" autocomplete="off" autofocus required class="metro-input">
      </label>


      <label>
        Password :
        <input type="password" name="password1" required class="metro-input">
      </label>


      <label>
        Konfirmasi Password :
        <input type="password" name="password2" required class="metro-input">
      </label>
      <br><br>
      <button type="submit" name="registrasi" class="button primary small rounded">Registrasi</button>
      <button class="button small outline rounded"><a href="login.php" style="color: blue;">Kembali</a></button>

    </ul>
  </form>
</body>

</html>