<?php

session_start();

if (isset($_SESSION['login'])) {
  header("Location: index.php");
  exit;
}

require 'functions.php';

// ketika tombol login ditekan
if (isset($_POST['login'])) {
  $login = login($_POST);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-all.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
</head>



<div class="container">

  <body style="background-image: url(asset/slider/bg2.png);">

    <?php if (isset($login['error'])) : ?>
      <p><?= $login['pesan']; ?></p>
    <?php endif; ?>
    <form action="" method="POST" style="width: 50%; margin:250px auto; border: 1px solid #ccc; background-image:url(asset/slider/bglogin.png); border-radius:10px;">
      <h1 style="text-align: center; color:#F0EFEF; padding:10px; font-family: 'Anton', sans-serif;">Login StoreSell</h1>
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
        <button type="submit" name="login" class="button shadowed primary">Login</button>

        <button class="button shadowed warning"><a href="registrasi.php" style="color: white;">Register</a></button>

      </ul>

    </form>
  </body>
</div>

</html>