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

    /* array
       merupakan sebuah variabel yang bisa menampung lebih dari satu nilai
       nilai yang ada didalam array = elemen
       elemen pada array boleh memiliki tipe data yang berbeda

       definisi lain array
       pasangan antara key dan value
       key-nya adalah index, yang dimulai dari 0
    */

    // membuat array
    // cara lama
    $hari = array("Senin", "Selasa", "Rabu");

    // cara baru
    $bulan = ["Januari", "Februari", "Maret"];
    $arr1 = [123, "tulisan", false];

    // cara menampilkan array
    // var_dump() / print_r()
    // var_dump($hari);
    // echo "<br>";
    // print_r($bulan);
    // echo "<br>";

    // menampilkan satu elemen pada array
    // echo $arr1[0];
    // echo "<br>";
    // echo $bulan[1];

    // menambahkan elemen baru pada array
    var_dump($hari);
    $hari[] = "Kamis";
    $hari[] = "Jum'at";
    echo "<br>";
    var_dump($hari);

?>