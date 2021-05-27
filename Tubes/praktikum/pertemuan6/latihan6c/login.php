<?php
    session_start();

    if(isset($_SESSION['login'])) {
        header("Location: index.php");
        exit;
    }
    
    require 'functions.php';


    if(isset($_POST['login'])) {
        $login = login($_POST);
    }

    // jika remember me di centang 
    if (isset($_POST['remember'])) {
        setcookie('username', $row['username'], time() + 60 * 60 * 24);
        $hash = hash('sha256', $row['id']);
        setcookie('hash', $hash, time() + 60 * 60 * 24);
    }

    if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
        $username = $_COOKIE['username'];
        $hash = $_COOKIE['hash'];

        $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username' ");
        $row = mysqli_fetch_assoc($result);

        if ($hash === hash('sha256', $row['id'], false)) {
            $_SESSION['username'] = $row['username'];
            header("Location: admin.php");
            exit;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
    <h2>Login</h2>
    <?php if(isset($login['error'])) : ?>
        <p style="color: red;"><?= $login['pesan']; ?></p>
    <?php endif; ?>
    <form action="" method="POST">
        <ul>
            <li>
                <label>
                    Username :
                    <input type="text" name="username" autofocus autocomplete="off" required>
                </label>
            </li>

            <li>
                <label>
                Password :
                <input type="password" name="password" autofocus autocomplete="off" required>
                </label>
            </li>

            <li>
                <button type="submit" name="login" class="btn waves-effect waves-light blue">Login</button>
                <button type="submit"class="btn waves-effect waves-light white" >
                    <a href="index.php" style="text-decoration: none; color: black;">Kembali</a>
                </button>
            </li>

            <li>
                <a href="registrasi.php">Registrasi disini</a>
            </li>
        </ul>
    </form>

</body>
</html>