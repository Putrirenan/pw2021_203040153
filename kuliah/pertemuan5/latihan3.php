<?php
/*
    Renandra Rahadian Putri
    203040153
    https://github.com/Putrirenan/pw2021_203040153
    Pertemuan 5 - 5 Maret 2021
    Mempelajari mengenai Array dalam PHP
*/
?>

<?php
    // contoh array numerik
$mahasiswa = [
    ["Putrirenan", "203040153", "Teknik Informatika", "putrirenan@gmail.com"],
    ["Dian Nurcahya", "203040154", "Teknik Informatika", "Dian@gmail.com"], 
    ["Heryani", "203040155", "Teknik Informatika", "Heryani@gmail.com"]
];

    // array numerik adalah array yg indexnya angka
    // array merupakan pasangan key dan index

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

    <!-- <ul>
        <?php foreach( $mahasiswa as $mhs) : ?>
            <li><?= $mhs ?></li>
        <?php endforeach; ?>
    </ul> -->

    <?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
    <li>Nama    :<?= $mhs[0] ?></li>
    <li>NRP     :<?= $mhs[1] ?></li>
    <li>Jurusan :<?= $mhs[2] ?></li>
    <li>Email   :<?= $mhs[3] ?></li>
    </ul>
    <?php endforeach; ?>
    
</body>
</html>