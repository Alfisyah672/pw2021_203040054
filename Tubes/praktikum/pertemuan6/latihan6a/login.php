<?php
session_start();
require 'function.php';

if (isset($_SESSION['username'])) {
    header("Location: admin.php");
    exit;
}
// login
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");

    if (mysqli_num_rows($cek_user) > 0) {
        $row = mysqli_fetch_assoc($cek_user);
        if ($password == $row['password']) {
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['hash'] = $row['id'];
        }
        if ($row['id'] == $_SESSION['hash']) {
            header("Location: admin.php");
            die;
        }
        header("Location: index.php");
        die;
    }
    $error = true;
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

<body style="background-image: url(asset/img/nice_snow.png);">
    <form action="" method="POST">
        <?php if (isset($error)) : ?>
            <p style="color: red; font-style: italic;">Username atau Password Salah</p>
        <?php endif; ?>

        <div class="box-login">
        <h2>Login</h2>
        <form action="" method="POST">
            <input type="text" name="user" placeholder="Username" class="input-control">
            <input type="password" name="pass" placeholder="Password" class="input-control">
            <input type="Submit" name="submit" value="Login" class="btn waves-effect waves-light blue">
            <button type="submit"class="btn waves-effect waves-light white" >
            <a href="index.php" style="text-decoration: none; color: black;">Kembali</a>
        </button>
        </form>
        
        <form action="#">
            <p>
                <label>
                <input type="checkbox" class="filled-in" checked="checked" />
                <span>Remember Me</span>
                </label>
            </p>
        </form>
    
    
    </form>
</body>
</html>