<?php
require 'function.php';

$fashion = query("SELECT * FROM fashion")

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
<body style="background-image: url(asset/img/circles.png);">
<div class="section">
        <div class="container">
           <div class="box">
                <h1>Welcome To StoreSell</h1>
            </div>
        </div>
    </div>
<a href="login.php">
    <button type="" class="btn waves-effect waves-light blue">Login Admin</button>
</a>

<form action="" method="GET">
        <input type="text" name="keyword" autofocus>
        <button type="submit" name="cari" class="btn waves-effect waves-light orange">Cari!</button>
    </form>

<table style="background-image: url(asset/img/memphis-mini.png);">
            <tr>
                <th>No</th>
                <th>Image</th>
                <th>Nama</th>
                <th>Price</th>
            </tr>
    
            <?php $i = 1?>
        <?php foreach($fashion as $fhs ) : ?>
            <tr>
                <td><?= $i ?></td>
                
                <td><img src="asset/img/<?php echo $fhs["image"] ?>" width="100"></td>
                <td class="name"><a href="detail.php"></a><?= $fhs["name"]; ?></td>
                <td><?= $fhs["price"]; ?></td>
            </tr>
            <?php $i++ ?>
            <?php endforeach; ?>
      
</body>
</html>