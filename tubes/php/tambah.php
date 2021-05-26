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
            margin: 0px 10% 0px 10%;
        }
        body {
        background-image: url(../assets/img/slider/bg2.png);
        background-size: cover;
        margin-bottom: 60px;
        }
        .tombol {
            float: left;
            margin: 3px;
            text-decoration:none; 
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3); 
            background-color: #7986cb; 
            border-radius: 8px;
        }
    </style>

</head>

<body>

    <div class="container">
        <h3>Tambah Data</h3><hr>
            <!-- Form  ------------------------->
        <form class="form" action="" method="post" enctype="multipart/form-data">

<div class="row">
    <div class="col">    
        <div class="mb-3">
            <label for="picture" class="form-label">Picture</label>
            <input type="file" class="picture form-control" name="picture" id="picture" onchange="previewImage()"><br>
            <img src="../assets/img/nophoto.png" width=" 250" height="250" class="img-preview">
        </div>
        <p>saran: 262 x 262.jpeg/jpg/png</p>
    </div>

    <div class="col">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name" required autocomplete="off">
        </div>
        <div class="mb-3">
            <label for="brand" class="form-label">Brand</label>
            <input type="text" class="form-control" name="brand" id="brand" required autocomplete="off">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" name="description" id="description" required autocomplete="off">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" name="price" id="price" required autocomplete="off">
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <input type="text" class="form-control" name="category" id="category" required autocomplete="off">
        </div>
        <div class="form-check form-check-inline">
            <input type="checkbox" name="check" id="check" value="check" required>
            <label for="check">I'm sure wanna add this product</label>
        </div> <br><br>
    </div>
</div>
            <!-- button ----------------------->
        <button type="submit" name="tambah" class="tombol btn link-light">Tambah Data</button>
        <button type="submit" class="tombol btn">
            <a href="admin.php" style="text-decoration: none; color: white;">Kembali</a>
        </button>
  
        </form>
    </div>
    
    <script src="../js/script.js"></script>
</body>
</html>