<?php
require 'function.php';

$id = $_GET['id'];
$fhs = query("SELECT * FROM fashion WHERE id = $id");

if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                alert('Data Berhasil Di Ubah);
                document.location.href = 'admin.php';
                </script>";
    } else {
        echo "<script>
                alert('Data Gagal Di Ubah! ') 
                document.location.href = 'admin.php';
                </script>";
    }
}
?>


<h3>Ubah Data Produk</h3>
<form action="" method="post">
<input type="hidden" name="id" id="id" value="<? $fhs['id']; ?>">
    <ul>
        <li>
            <label for="name">Nama :</label><br>
            <input type="text" name="name" id="name" required value="<? $fhs['name']; ?>"><br><br>
        </li>
        <li>
            <label for="image">Image :</label><br>
            <input type="text" name="image" id="image" required value="<? $fhs['image']; ?>"><br><br>
        </li>
        <li>
            <label for="price">Price :</label><br>
            <input type="text" name="price" id="price" required value="<? $fhs['price']; ?>"><br><br>
        </li>
        <li>
            <label for="description">Description :</label><br>
            <input type="text" name="description" id="description" required value="<? $fhs['description']; ?>"><br><br>
        </li>
        <li>
            <label for="stok">Stok :</label><br>
            <input type="text" name="stok" id="stok" required value="<? $fhs['stok']; ?>"><br><br>
        </li>
        <button type="submit" name="ubah">Ubah Data</button>
        <button type="submit">
            <a href="admin.php" style="text-decoration: none; color: black;">Kembali</a>
        </button>
    </ul>
</form>