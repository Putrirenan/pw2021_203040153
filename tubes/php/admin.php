<?php
    // Renandra Rahadian Putri
    // 203040153
    // Jum'at, 13:00


session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

// menghubungkan dengan file php lainnya
require 'functions.php';

// ketika tombol cari di klik
if(isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];
    $products = query("SELECT * FROM products WHERE
                name        LIKE '%$keyword%' OR
                brand       LIKE '%$keyword%' OR
                description LIKE '%$keyword%' OR
                price       LIKE '%$keyword%' OR
                category    LIKE '%$keyword%' ");
} else {
    $products = query("SELECT * FROM products") ;
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
    <link href ="../assets/img/logo.png" rel="shortcut icon">

    <!-- Import Google font Pacifio -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

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
        .navbar{
        background-color: #FAF9F6; 
        box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }
        .navbar .container {
            margin:auto;
            font-weight: bold;
        }
        .nav-ul a {
            color: #4b0082 !important;
        }
        .nav-ul a:hover {
            color: #ab47bc!important;
            text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.2);
            transition: all ease 0.5s;
        }
            /* Table CSS */
        body {
            background-image: url(../assets/img/slider/bg2.png);
            background-size: cover;
            margin-bottom: 60px;
        }
        .table {
            border: 3px solid lightgrey;
            margin-top: 10px;
            margin-bottom: 10px;
            text-align: center;
        }
        
        .update, .delete {
            float: left;
            margin: 3px;
            text-decoration:none; 
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3); 
            background-color: #7986cb; 
            border-radius: 8px;
        }

        .update a:hover, .delete a:hover{
            background-color: #7e57c2;
            border-radius: 8px;
        }
        .daftar {
            padding: 50px 0px 0px 0px !important;
            margin-top: -50px;
        }

    </style>

</head>
<body>

    <!-- Navbar ------------------------------------------>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container container-fluid">
            <a class="navbar-brand" href="#home" style="font-size: 28px; color: #4b0082; font-family: 'Pacifico', cursive;">Get it Glow</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="nav-ul navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../index.php" style="color: #4b0082;">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../index.php#products" style="color: #4b0082;">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: #4b0082;">Pesanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: #4b0082;">Chat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="logout.php"><button type="button" class="btn text-light btn-sm" style="background-color: #191970; font-weight: bold;">Logout</button></a>
                </li>
            </ul>
            </div>
        </div>
    </nav>


    <!-- Table ------------------------------------------->
    <div class="container-table container-fluid mt-5 mb-5">
        <h1 class="daftar " style="text-align:center; text-shadow: 2px 2px 2px lightgrey;">Daftar Product</h1> <hr>
        <table class="table table-hover table-sm table-responsive table align-middle table-striped"
            style="background-color: #d1c4e9;">
            <thead class="table" style="background-color: #9575cd;">
                <tr>
                    <th>No<i class="material-icons">import_export</i></th>
                    <th>Opsi<i class="material-icons">import_export</i></th>
                    <th>Picture<i class="material-icons">import_export</i></th>
                    <th>Name<i class="material-icons">import_export</i></th>
                    <th>Brand<i class="material-icons">import_export</i></th>
                    <th>Decription<i class="material-icons">import_export</i></th>
                    <th>Price<i class="material-icons">import_export</i></th>
                    <th>Category<i class="material-icons">import_export</i></th>
                </tr>
            </thead>
                
            <div class="row justify-content-left">
              <div class="col-md-3">
                <div class="add">
                    <a href="tambah.php" class="link-dark btn  btn-m" style="text-decoration:none; background-color: #7986cb; color: white;">Tambah Data</a>
                </div> <br>
              </div>
            </div>    

            <!-- Searching ------------------>
            <form action="" method="get">
                <div class="row justify-content-center">
                   <div class="col-md-3">
                   <input class="form-control" style=";" type="text" name="keyword" autocomplete="off" autofocus>
                    <button class="link-dark btn btn-sm" type="submit" name="cari" style="margin: -65px 0px 0px 355px; 
                        text-decoration:none; background-color: #7986cb; color: white;">Cari</button>
                   </div>
                </div>
            </form>

            <?php if (empty($products)) : ?>
                <tr>
                    <td colspan="8">
                        <h4>Data tidak ditemukan</h4>
                    </td>
                </tr>
            <?php else : ?>
                <?php $i = 1; ?>
                <?php foreach ($products as $p) : ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td>
                            <div class="update"><a href="ubah.php?id=<?= $p['id']; ?>" class="link-light btn btn-sm">Ubah</a></div>
                            <div class="delete"><a href="hapus.php?id=<?= $p['id']; ?>" onclick="return confirm('Hapus Data??')" class="link-light btn btn-sm">Hapus</a></div>
                        </td>
                        <td><img src="../assets/img/<?= $p["picture"]; ?>" width="250"></td>
                        <td><?= $p["name"]; ?></td>
                        <td><?= $p["brand"]; ?></td>
                        <td><?= $p["description"]; ?></td>
                        <td><?= $p["price"]; ?></td>
                        <td><?= $p["category"]; ?></td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </table>
    </div>

    <!--JavaScript at end of body for optimized loading-->
    <script src="js/script.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->    
</body>
</html>