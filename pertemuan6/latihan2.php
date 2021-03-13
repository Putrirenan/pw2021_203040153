<?php
/*
    Renandra Rahadian Putri
    203040153
    https://github.com/Putrirenan/pw2021_203040153
    Pertemuan 6 - 12 Maret 2021
    Mempelajari mengenai Assosiative Array
*/
?>

<!-- <?php 

$mahasiswa = [
                ["Putrirenan", "203040153", "putrirenan@gmail.com", "Teknik Informatika"],
                ["Dian Nur", "203040124", "diannur@gmail.com", "Teknik Informatika"],
                ["Dita Febrianti", "203040123", "ditafeb@gmail.com", "Teknik Informatika"],
                ["Heryani", "203040162", "heryani@gmail.com", "Teknik Informatika"]
            ];

?> -->

<?php
// Array Assosiative
// Sebuah variable yang bisa memiliki banyak nilai dan pasangan
// antara key dan value sama 
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yg kita buat sendiri

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
    <title>Daftar Mahasiswa</title>
    
    <style>
        .mhs {
            float: left;
        }
    </style>

</head>
<body>

    <h1>Daftar Mahasiswa</h1>


    <?php foreach( $mahasiswa as $mhs ) : ?>
        <ul class="mhs">
            <li>
                <img src="img/<?= $mhs["gambar"] ?>">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NPM : <?= $mhs["nrp"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
        </ul>
    <?php endforeach; ?>
    






</body>
</html>