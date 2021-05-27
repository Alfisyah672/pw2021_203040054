<?php

/*
Alfi Syahrin Rachmat
203040054
https://github.com/Alfisyah672/pw2021_203040054
Pertemuan 5, 4 Maret 2021
Mempelajari mengenai Array Numerik
*/


$mahasiswa = [
    ["Alfi Syahrin", "203040054", "Teknik Informatika", "alfisyahrin673@gmail.com"],
    ["Dhenisa Dewi Sulaeman", "203020102", "Teknologi Pangan", "dhenisa123@gmail.com"],
    ["Bambang Subeno", "203030045", "Teknik Mesin", "bambangs321@gmail.com"]
];



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs ) : ?>

    <ul>
        <li>Nama : <?php echo $mhs[0]; ?></li>
        <li>NRP : <?php echo $mhs[1]; ?></li>
        <li>Jurusan : <?php echo $mhs[2]; ?></li>
        <li>Email : <?php echo $mhs[3]; ?></li>
    </ul>
    <?php endforeach; ?>

</body>
</html>