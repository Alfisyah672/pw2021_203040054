<?php
 
 // Nama : Alfi Syahrin Rachmat
 // Nrp : 203040054
 // Shift : PW Jumat Kelas B 10.00 - 11.00 -->
    
    
    
    function salam($waktu = "Datang", $matkul = "Praktikum pw") {
        return "Selamat $waktu $matkul";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2a</title>

    <style>
        div{
            font-size: 28px;
            font-family: arial;
            color:  #8c782d;
            font-style: italic;
            border: 2px solid black;
            box-shadow: black;
            border-radius: 10px;
        }
    </style>

</head>
<body>
    <div>
        <h1 class="div"><?= salam("Datang","Di Praktikum Pw"); ?></h1>
    </div>
    
</html>