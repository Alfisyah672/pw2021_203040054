<!-- // Nama : Alfi Syahrin Rachmat
// Nrp : 203040054
// Shift : PW Jumat Kelas B 10.00 - 11.00 -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas1</title>
    <style>
        .warna-baris1 {
            background-color: salmon;
        }
        .warna-baris2 {
            background-color: lightblue;
        }
    
    </style>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0"> 
        <?php for($i = 1; $i <= 5; $i++) : ?>
            <?php if($i % 2 == 1) : ?>
            <tr class="warna-baris1">
                <?php else : ?>
                <tr class="warna-baris2">
                <?php endif?>
            

                <?php for($j = 1; $j <= 6; $j++) : ?>
                    <td><?= "$i, $j"; ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>