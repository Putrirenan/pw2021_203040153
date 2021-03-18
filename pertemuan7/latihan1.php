<?php
/*
    Renandra Rahadian Putri
    203040153
    https://github.com/Putrirenan/pw2021_203040153
    Pertemuan 7 - 13 Maret 2021
    Mempelajari mengenai GET & POST
*/
?>

<?php 
// Variable Scope / lingkup variabel
// $x = 10;

// function tampilX () {
//     global $x;
//     echo $x; 
// }

// tampilX();

// SUPERGLOBALS
// $_GET, $_POST, $_REQUEST, $_SESSION, $_COOKIE, $_SERVER, $_ENV
// variable global milik PHP
// merupakan Array Associative

// s
// var_dump($_POST);

$mahasiswa = [  [   "nama" => "Putrirenan", 
                    "nrp" => "203040153", 
                    "email" => "putrirenan@gmail.com", 
                    "jurusan" => "Teknik Informatika",
                    "gambar" => "foto1.png"],
                [   "nama" => "Diannur", 
                    "nrp" => "203040124", 
                    "email" => "diannur@gmail.com", 
                    "jurusan" => "Teknik Informatika",
                    "gambar" => "foto2.png"],
                    [  "nama" => "Dita Febrianty", 
                    "nrp" => "203040145", 
                    "email" => "ditafeb@gmail.com", 
                    "jurusan" => "Teknik Informatika",
                    "gambar" => "foto3.png"],
                    ["nama" => "Heryani", 
                    "nrp" => "203040168", 
                    "email" => "heryani@gmail.com", 
                    "jurusan" => "Teknik Informatika",
                    "gambar" => "foto4.png"],
            ];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    
    <ul>
    <?php foreach( $mahasiswa as $mhs) : ?>
        <li>
            <a href="latihan2.php?nama=<?=$mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"];?>&jurusan=<?= $mhs["jurusan"]; ?> &gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
        </li>
    <?php endforeach; ?>
    </ul>

</body>
</html>
