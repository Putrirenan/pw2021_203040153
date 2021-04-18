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

if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                alert('Data Berhasil ditambahkan!');
                document.location.href = 'admin.php'; 
              </script>";
    } else {
        echo "<script>
                alert('Data Gagal ditambahkan!');
                document.location.href = 'admin.php'; 
              </script>";
    }
    // redirect
    // header("Location: admin.php");
    // exit;
} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get it Glow Store || Online Store </title>
    
    <link rel="stylesheet" href="css/style.css">

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined"
    rel="stylesheet">

    <!-- Import bootsrap.css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- using fontawseome ----->
    <script src="https://kit.fontawesome.com/0fc708ed1b.js"
    crossorigin="anonymous"></script>    

    <style>
        @font-face {
        font-family: 'Quicksand';
        src: url('../font/Quicksand-VariableFont_wght.ttf');
        }

        * {
            font-family: 'Quicksand';
        }

        /* CSS Dokumen */
        .container {
            padding-top: 20px;
            padding-bottom: 50px;
        }
        
        .container h3 {
            padding: 10px;
            text-shadow: 2px 2px 2px lightgrey;
        }

        .form {
            margin: 0px 60% 0px 0px;
        }

    </style>

</head>

<body>

    <div class="container">
        <h3>Tambah Data</h3><hr>
            <!-- Form  ------------------------->
        <form class="form" action="" method="post">
        <div class="mb-3">
            <label for="picture" class="form-label">Picture</label>
            <input type="text" class="form-control" name="picture" id="picture">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name">
        </div>
        <div class="mb-3">
            <label for="brand" class="form-label">Brand</label>
            <input type="text" class="form-control" name="brand" id="brand">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" name="description" id="description">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" name="price" id="price">
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <input type="text" class="form-control" name="category" id="category">
        </div>
        <div class="form-check form-check-inline">
            <input type="checkbox" name="check" id="check" value="check">
            <label for="check">I'm sure wanna add this product</label>
        </div> <br><br>
        
            <!-- button ----------------------->
        <button type="submit" name="tambah" class="btn btn-primary">Tambah Data</button>
        <button type="submit" class="btn btn-primary">
            <a href="index.php" style="text-decoration: none; color: white;">Kembali</a>
        </button>
        
        </form>
    </div>
    
</body>
</html>