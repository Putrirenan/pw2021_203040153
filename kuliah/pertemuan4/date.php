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
    /* Date
       Untuk menampilkan tanggal dengan format tertentu
    */
    // echo date("l, d-M-Y"); 
    
    /* Time 
       UNIX Timestamp / EPOCH time
       echo time(); 
    */
    // echo date("l, d M Y", time()+ 60*60*24*100); 

    /* mktime
       untuk membuat sendiri detik yang sudah berlalu dari 1 jan 1970 - yg diinginkan 
       cara manggil mktime(0, 0, 0, 0, 0, 0) memiliki parameter 6 jd bisa memasukan 6 angka 
       urutannya jam, menit, detik, bulan, tanggal, tahun
    */
    // echo date("l, d M Y", mktime(0,0,0, 3, 9, 2002)); 

    /* strtotime
       masukin format tgl keluarnya detik
    */
    echo date("l", strtotime("9 mar 2002"));

?>