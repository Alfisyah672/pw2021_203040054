<?php
// $_GET
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
    <title>Latihan1</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
    <?php foreach( $mahasiswa as $mhs ) : ?>
        <li>
        <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
        </li>
    <?php endforeach; ?>
    </ul>
</body>
</html>