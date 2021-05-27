<?php

require '../functions.php';
$fashion = cari($_GET['keyword']);
?>


<div class="container" style="background-image: url(asset/slider/bg11.png);">

  <body style="background-image: url(asset/slider/bgbody.png);">
    <img src="asset/slider/4.jpg" style="width: 100%; height:400px; display:block; margin-left:auto; margin-right:auto; padding:10px;"><br>
    <button class="button alert default rounded" style="float: right; display:block;"><a href="logout.php" style="color: white;">Logout</a></button>
    <button class="button shadowed primary"><a href="LoginAdmin.php" style="color: whitesmoke;">Login Admin</a></button>

    <h1 style="text-align: center; font-family: 'Girassol', cursive; border:1px solid white; width:50%; margin-left:auto; margin-right:auto; border-radius:10px;background-image:url(asset/slider/bg6.png);">Welcome To StoreSell</h1>
    <br><br>

    <div style="margin-left: 25%;">
      <form action="" method="POST" style="margin-right:400px;">
        <input type="text" name="keyword" size="130" placeholder="Masukan Keyword Pencarian" autocomplete="off" data-role="input" style="width:125%;" class="keyword">
        <button type="submit" name="cari" class="tombol-cari">Cari!</button>
      </form>
    </div>

    <br>
    <div class="container">
      <table class="table table-border">

        <tr>
          <th>No</th>
          <th>Image</th>
          <th>Nama</th>
          <th>Price</th>
          <th>Aksi</th>
        </tr>

        <?php if (empty($fashion)) : ?>
          <tr>
            <td colspan="4">
              <p>Data produk tidak ditemukan!!</p>
            </td>
          </tr>
        <?php endif; ?>
        <?php $i = 1;
        foreach ($fashion as $fhs) : ?>

          <tr style="text-align: center;">
            <td><?= $i++; ?></td>
            <td><img src="asset/img/<?= $fhs['gambar']; ?>" width="80"></td>
            <td><?= $fhs['nama']; ?></td>
            <td><?= $fhs["harga"]; ?></td>
            <td>
              <button class="button success small rounded">
                <a href="detail.php?id=<?= $fhs['id']; ?>" style="color: white;">Detail</a>
              </button>
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>

  </body>
</div>
<footer style="background-image:url(asset/slider/bg9.png);">
  <div class="container" style="text-align: center; height:70px; padding:25px; color:white; font-family: 'Goblin One', cursive;">
    <p>Copyright &copy; 2021 - StoreSell.</p>
  </div>
</footer>