<?php
/*
    Renandra Rahadian Putri
    203040153
    Jum'at, 13:00
*/
?>

<?php 
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

// menghubungkan dengan file php lainnya
require 'functions.php';

$id = $_GET['id'];

if (hapus($id) > 0) {
    echo "<script> 
            alert('Data Berhasil dihapus!');
            document.location.href = 'admin.php';
          </script>";
} else {
    echo "<script> 
            alert('Data Gagal dihapus!');
            document.location.href = 'admin.php';
          </script>";
}

?>
