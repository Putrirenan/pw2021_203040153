<?php
/*
    Renandra Rahadian Putri
    203040153
    https://github.com/Putrirenan/pw2021_203040153
    Pertemuan 12 - 2 Mei 2021
    Mempelajari mengenai Login & Registrasi
*/
?> 
 
<?php
session_start();
session_destroy();
header("Location: login.php");
exit;

?>