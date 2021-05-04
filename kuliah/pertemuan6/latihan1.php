<?php
/*
    Renandra Rahadian Putri
    203040153
    https://github.com/Putrirenan/pw2021_203040153
    Pertemuan 6 - 12 Maret 2021
    Mempelajari mengenai Assosiative Array
*/
?>

<?php 

// review materi pertemuan sebelumnya
// array
// ada 2 cara membuat array : cara lama & cara baru

// cara lama
$hari = array ("Senin", "Selasa", "Rabu");
var_dump($hari);
echo "<br>";
// cara baru
$bulan = ["Januari", "Februari", "Maret"];
var_dump($bulan);
echo "<br>";
// array dengan tipe data berbeda ex: (int, string, boolean)
$arr = [100, "ini contoh", true];
var_dump($arr);
echo "<br><br><br>";

// cara menampilkan array
// versi debugging (versi seorang developer/programmer untuk melihat isi array) bukan user
/*  var_dump(); ,
    print_r(); ,artinya print scr rekursif kalau print tanpa _r fungsinya sama dgn echo
    echo $arr[0,1,2,3] , untuk menampilkan satu elemen pada array
    - var_dump menampilkan data versi lengkap
    - print_r meanmpilkan data versi simpel
*/

// dapat membuat array di dlm array (array multidimensi)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1 Pertemuan 6 : Associative Array</title>

    <style>
        .kotak {
            width: 30px;
            height: 30px;
            background-color: #BADA55;
            text-align: center;
            line-height: 30px;
            margin: 3px;
            float: left;
            transition: 1s;
        }
        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
            background-color: salmon;
        }
        .clear {
            clear: both;
        }
    </style>

</head>
<body>

    <?php 
    $angka = [
                [1,2,3],
                [4,5,6],        // contoh array multidimensi
                [7,8,9]
            ];
    ?>


    <?php foreach( $angka as $a ) : ?>
        <?php foreach( $a as $b ) : ?>
            <div class="kotak"><?= $b; ?></div>
        <?php endforeach; ?>
        <div class="clear"></div>
    <?php endforeach; ?>
    



</body>
</html>