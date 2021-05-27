<?php

session_start();

if (isset($_SESSION['LoginAdmin'])) {
  header("Location: index.php");
  exit;
}

require 'functions.php';

// ketika tombol login ditekan
if (isset($_POST['LoginAdmin'])) {
  $LoginAdmin = LoginAdmin($_POST);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Admin</title>
  <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-all.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
</head>

<body style="background-image: url(asset/slider/bgloginadmin.png);">
  <div class="container">
    <?php if (isset($LoginAdmin['error'])) : ?>
      <p><?= $LoginAdmin['pesan']; ?></p>
    <?php endif; ?>
    <form action="" method="POST" style="width: 35%; margin:250px auto; border: 1px solid #ccc; background-image:url(asset/slider/bgadminlogin.png); border-radius:10px;">
      <h1 style="text-align: center; color:#363636; padding:10px; font-family: 'Anton', sans-serif;">Login Admin</h1>
      <ul>

        <label>
          Username :
          <input type="text" name="username" autofocus autocomplete="off" required class="metro-input">
        </label>


        <label>
          Password :
          <input type="password" name="password" autofocus autocomplete="off" required class="metro-input">
        </label>
        <br><br>
        <button type="submit" name="LoginAdmin" class="button shadowed primary">Login</button>
        <button class="button shadowed warning"><a href="registrasiAdmin.php" style="color: black;">Register</a></button>
        <button class="button info default rounded" style="float: right; display:block;"><a href="index.php" style="color: white;">Kembali</a></button>

      </ul>
    </form>
  </div>
</body>

</html>