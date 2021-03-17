<?php
    session_start();
    include 'db_bukatoko.php';
    if($_SESSION['status_login'] != true){
        echo '<script>window.location="login.php"</script>';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BukaToko</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="container">
        <h1><a href="dashboard.php">StoreSell</a></h1>
    <ul>
        <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="profile.php">Profile</a></li>
        <li><a href="data_kategori.php">Data Kategori</a></li>
        <li><a href="data-produk.php">Data Produk</a></li>
        <li><a href="keluar.php">Keluar</a></li>
    </ul>
    </div>
    </header>


    <div class="section">
        <div class="container">
            <h3>Tambah data Produk</h3>
            <div class="box">
               <form action="" method="POST">
                   <select class="input-control" name="kategori" required>
                    <option value="">Pilih</option>
                    <?php
                        $kategori = mysqli_query($conn, "SELECT * FROM tb_category ORDER BY category_id DESC");
                        while($r = mysqli_fetch_array($kategori)){
                    ?>
                        <option value=""><?php echo $r['category_name'] ?></option>
                    <?php } ?>
                   </select>
                   <input type="submit" name="Submit" value="Submit" class="btn">
               </form>
               <?php
                if (isset($_POST['submit'])) {
                    
                    $nama = ucwords($_POST['nama']);

                    $insert = mysqli_query($conn, "INSERT INTO tb_category VALUES (
                        null,
                        '".$nama."')");
                        if($insert){
                            echo 'berhasil';
                        }else {
                            echo 'gagal' .mysqli_error($conn);
                        }
                }
               ?>
            </div>
        </div>
    </div>


    <footer>
        <div class="container">
            <small>Copyright &copy; 2021 - StoreSell</small>
        </div>
    </footer>
</body>
</html>