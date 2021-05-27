<?php
// Nama : Alfi Syahrin Rachmat
 // Nrp : 203040054
 // Shift : PW Jumat Kelas B 10.00 - 11.00 -->


function pengertian($waktu = "Suatu variabel", $matkul = "yang dapat menampung") {
    return "Array adalah $waktu $matkul";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3a</title>

    <style>
        div{
            font-size: 20px;
            font-family: arial;
            color:  black;
            font-style: italic;
            border: 2px solid black;
            box-shadow: black;
            
        }
    </style>

</head>
<body>
    <div>
        <h1 class="div"><?= pengertian("Suatu Variabel","yang dapat menampung banyak nilai"); ?></h1>
    </div>
    
</html>