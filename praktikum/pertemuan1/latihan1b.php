<!-- // Nama : Alfi Syahrin Rachmat
// Nrp : 203040054
// Shift : PW Jumat Kelas B 10.00 - 11.00 -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Latihan1b</title>
</head>
<body>
        <table border="5" cellspacing="0" cellpadding="10">
            <tr>
                <th></th>
                <?php for ($i = 1; $i <= 5; $i++) : ?>
                    <th>Kolom <?= $i; ?></th>
                <?php endfor; ?>
            </tr>
            <tr>
                <th>baris 1</th>
                <?php for ($i = 1; $i <= 5; $i++) : ?>
                    <th>baris 1, kolom <?= $i; ?></th>
                <?php endfor; ?>
            </tr>
            <tr>
                <th>baris 2</th>
                <?php for ($i = 1; $i <= 5; $i++) : ?>
                    <th>baris 2, kolom <?= $i; ?></th>
                <?php endfor; ?>
            </tr>
            <tr>
                <th>baris 3</th>
                <?php for ($i = 1; $i <= 5; $i++) : ?>
                    <th>baris 3, kolom <?= $i; ?></th>
                <?php endfor; ?>
            </tr>
            <tr>
                <th>baris 4</th>
                <?php for ($i = 1; $i <= 5; $i++) : ?>
                    <th>baris 4, kolom <?= $i; ?></th>
                <?php endfor; ?>
            </tr>
            <tr>
                <th>baris 5</th>
                <?php for ($i = 1; $i <= 5; $i++) : ?>
                    <th>baris 5, kolom <?= $i; ?></th>
                <?php endfor; ?>
            </tr>


        </table>



</body>
</html>