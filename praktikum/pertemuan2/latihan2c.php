<!-- // Nama : Alfi Syahrin Rachmat
// Nrp : 203040054
// Shift : PW Jumat Kelas B 10.00 - 11.00 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2c</title>
    <style>
    h3{
            background-color: salmon;
            display: inline-block;
            text-align: center;
            width: 50px;
            height: 50px;
            line-height: 50px;
            border-radius: 100%;
            border: 2px solid black;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
<?php for ($i=1; $i<=5; $i++) : ?>
        <?php for ($x=1; $x<=$i; $x++) : ?>
            <h3><?= $i ?></h3>
        <?php endfor; ?>
        <br>
    <?php endfor; ?>
    
</body>
</html>