<?php

/*
Alfi Syahrin Rachmat
203040054
https://github.com/Alfisyah672/pw2021_203040054
Pertemuan 5, 4 Maret 2021
Mempelajari mengenai Array
*/



// array
// variabel yang dapat memiliki banyak nilai
// elemen pada array boleh memiliki tipe data yang berbeda
// pasangan antara key dan value
// key-nya adalah index, yang dimulai dari 0


// membuat array
// cara lama
$hari = array("Senin", "Selasa", "Rabu");
// cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arrl = [123, "tulisan", false];

// menampilkan array
// var_dump()/ print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

// // menampilkan 1 elemen pada array

// echo $arrl[0];
// echo "<br>";
// echo $bulan[1];

// menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "kamis";
$hari[] = "jumat";
echo "<br>";
var_dump($hari);

?>