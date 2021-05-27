<?php
// $mahasiswa = [
//     ["Alfi Syahrin Rachmat", "203040054", "alfisyahrin673@gmail.com", "Teknik Informatika"],
//     ["Dhenisa Dewi", "203040100", "dhenisadewi@gmail.com", "Teknologi Pangan"]
// ];

// array associative
// key nya string yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "Alfi Syahrin", 
        "nrp" => "203040054",
        "email" => "alfisyahrin673@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "alfi.jpg"
    ],
    [
        "nama" => "Dhenisa Dewi", 
        "nrp" => "2030400100",
        "email" => "Dhenisa@gmail.com",
        "jurusan" => "Teknologi Pangan",
        "gambar" => "test.jpg"
    ],
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

     <?php foreach( $mahasiswa as $mhs ) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?> ">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs["nrp"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
        </ul>
        <?php endforeach; ?>
</body>
</html>