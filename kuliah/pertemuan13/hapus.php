<?php

  // Renandra Rahadian Putri
  // 203040153
  // https://github.com/Putrirenan/pw2021_203040153
  // Pertemuan 13 - 5 Mei 2021
  // Mempelajari mengenai AJAX Live search & Upload Gambar


session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

// jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}

// mengambil id dari url
$id = $_GET['id'];

if (hapus($id) > 0) {
  echo "<script>
          alert('data berhasil dihapus');
          document.location.href = 'index.php';
       </script>";
} else {
  echo "data gagal dihapus!";
}
 
?>