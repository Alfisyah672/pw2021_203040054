<?php
   
// Nama : Alfi Syahrin Rachmat
// Nrp : 203040054
// Shift : PW Jumat Kelas B 10.00 - 11.00 -->
    
    function salam($jawabanIsset = "Iseet adalah = Fungsi isset () digunakan untuk memeriksa apakah suatu variabel sudah diatur atau belum. Fungsi isset () mengembalikan false jika variabel pengujian berisi nilai NULL.",
   $jawabanEmpty = "Empty adalah = Empty pada PHP berfungsi sebagai penanda suatu kondisi. Contohnya yang sering kita temukan adalah dalam pengisian suatu data."); 


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2</title>

    <style>
            div{
                font-size: 28px;
                font-family: arial;
                color:  #8c782d;
                font-style: italic;
                border: 2px solid black;
            }
    
    </style>

</head>
<body>
    <div>
        <h1 class="div"><?= salam("Iseet adalah = Fungsi isset () digunakan untuk memeriksa apakah suatu variabel sudah diatur atau belum. Fungsi isset () mengembalikan false jika variabel pengujian berisi nilai NULL.", ); ?></h1>
    </div>
</body>
</html>