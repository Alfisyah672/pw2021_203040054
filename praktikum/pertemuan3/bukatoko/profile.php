<?php
    session_start();
    include 'db_bukatoko.php';
    if($_SESSION['status_login'] != true){
        echo '<script>window.location="login.php"</script>';
    }

    $query = mysqli_query($conn, "SELECT * FROM tb_admin WHERE admin_id = '".$_SESSION['id']."'");
    $d = mysqli_fetch_object($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BukaToko</title>
    <link rel="stylesheet" href="asset/style.css">
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
            <h3>Profile</h3>
            <div class="box">
               <form>
                   <input type="text" name="nama" placeholder="Nama Lengkap" class="input-control" value="<?php echo $d->admin_name?>" required>
                   <input type="text" name="user" placeholder="Username" class="input-control" value="<?php echo $d->username?>" required>
                   <input type="text" name="hp" placeholder="No Hp" class="input-control" value="<?php echo $d->admin_telp?>" required>
                   <input type="text" name="email" placeholder="Email" class="input-control" value="<?php echo $d->admin_email?>" required>
                   <input type="text" name="alamat" placeholder="Alamat" class="input-control" value="<?php echo $d->admin_address?>" required>
                   <input type="submit" name="Submit" value="Ubah Profile" class="btn">
               </form>
               <?php
                if(isset($_POST['submit'])){
                    $nama = $_POST['nama'];
                    $user = $_POST['user'];
                    $hp   = $_POST['hp'];
                    $email = $_POST['email'];
                    $alamat = $_POST['alamat'];

                    $update = mysqli_query($conn, "UPDATE tb_admin SET 
                    admin_name = '".$nama."',
                    username = '".$user."',
                    admin_telp = '".$hp."',
                    admin_email = '".$email."',
                    admin_address = '".$alamat."'
                    WHERE admin_id = '".$d->admin_id."'");

                    if ($update) {
                        echo '<script>alert("Ubah data berhasil")</script>';
                        echo '<script>window.location="profile.php"</script>';
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