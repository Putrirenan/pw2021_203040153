<?php
/*
    Renandra Rahadian Putri
    203040153
    https://github.com/Putrirenan/pw2021_203040153
    Pertemuan 4 - 4 Maret 2021
    Mempelajari mengenai Function dalam PHP
*/
?>

<?php 

function salam($waktu = "Datang", $nama = " Admin") { //dapat diberi nilai parameter default
    return "Selamat $waktu, $nama!";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Function</title>
</head>
<body>

    <h1><?= salam("Sore", "putrirenan"); ?></h1>
    
</body>
</html>