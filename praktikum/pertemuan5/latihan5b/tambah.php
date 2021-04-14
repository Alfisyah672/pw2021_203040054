<?php
require 'function.php';

if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                alert('Data Berhasil Di Tambahkan);
                document.location.href = 'admin.php';
                </script>";
    }
}
?>


<h3>Tambah Data Produk</h3>
<form action="" method="post">
    <ul>
        <li>
            <label for="name">Nama :</label><br>
            <input type="text" name="name" id="name" required><br><br>
        </li>
        <li>
            <label for="image">Image :</label><br>
            <input type="text" name="image" id="image" required><br><br>
        </li>
        <li>
            <label for="price">Price :</label><br>
            <input type="text" name="price" id="price" required><br><br>
        </li>
        <li>
            <label for="description">Description :</label><br>
            <input type="text" name="description" id="description" required><br><br>
        </li>
        <li>
            <label for="stok">Stok :</label><br>
            <input type="text" name="stok" id="stok" required><br><br>
        </li>
        <button type="submit" name="tambah">Tambah Data</button>
        <button type="submit">
            <a href="admin.php" style="text-decoration: none; color: black;">Kembali</a>
        </button>
    </ul>
</form>