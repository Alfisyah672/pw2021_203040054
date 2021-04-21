<?php
    require 'functions.php';

    if (isset($_POST['registrasi'])) {
        registrasi($_POST);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi | StoreSell</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
    <h2>Registrasi</h2>

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
                <button type="submit" name="registrasi" class="btn waves-effect waves-light black">Registrasi</button>

                <button type="submit"class="btn waves-effect waves-light white" >
                    <a href="login.php" style="text-decoration: none; color: black;">Kembali</a>
                </button>
            </li>
        </ul>
    </form>
</body>
</html>