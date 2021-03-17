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
            <h3> Data Kategori</h3>
            <div class="box">
                <p><a href="tambah-kategori.php">Tambah Data</a></p>
                <table border="1" cellspacing"0" class="table">
                    <thead>
                        <tr>
                            <th width="60px">No</th>
                            <th>Kategori</th>
                            <th width="150px">Aksi</th>
                        </tr>
                    </thead>
                    <body>
                        <?php
                            $no = 1;
                            $kategori = mysqli_query($conn, "SELECT * FROM tb_category ORDER BY category_id DESC");
                            while ($row = mysqli_fetch_array($kategori)) {
                            ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $row['category_name'] ?></td>
                            <td><a href="edit-kategori.php?id=<?php echo $row['category_id'] ?>">Edit</a> || <a href="proses-hapus.php?idk=<?php echo $row['category_id'] ?>">Hapus</a></td>
                        </tr>
                        <?php } ?>
                    </body>
                </table>
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