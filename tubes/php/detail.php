<?php
    // Renandra Rahadian Putri
    // 203040153
    // Jum'at, 13:00



// Mengecek apakah ada id yang dikirimkan
// Jika tidak maka akan dikembalikan ke halaman index.php
if (!isset($_GET['id'])) {
    header("location: ../index.php");
    exit;
}

require 'functions.php';

// Mengambil id dari url
$id = $_GET['id'];

//  Melakukan query dengan parameter id yang diambil dari url
$products = query("SELECT * FROM products WHERE id = $id") [0];

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
    * {
    font-family: 'Quicksand';
        }
        nav.navbar {
    font-weight: bold;
    }
    nav a {
        color: #4b0082;
    }
    .nav a:hover {
        color: #ab47bc!important;
        text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.2);
        transition: all ease 0.5s;
    }
    nav a .navbar-brand {
        font-size: 28px;
    }
    nav a .nav-link {
        font-size: 14px;
        color: #4b0082;
    }
    body {
        padding: 100px 50px 0px 60px!important;
        background-image: url(../assets/img/slider/bg2.png);
        background-size: cover;

    }
    .detail-container a.btn {
        margin-top: 80px;
        box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3); 
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);    
    }
    .card-body a:hover {
        background-color: #7e57c2 !important;
        box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);    
    }
    .carousel {
        float: right;
        width: 250px;
        height: 400px;
        margin: -400px -300px 0px 0px;
    }
    </style>

</head>
<body>

    <!-- Navbar ------------------------------------------>
    <nav class="navbar fixed-top" style="background-color: #FAF9F6; box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);"> <!-- #dda0dd -->
        <div class="container-fluid" style="width: 90%; height: 50px;">
            <a class="navbar-brand" href="#" style="margin-left: 70px; font-size: 28px; color: #4b0082; font-family: 'Pacifico', cursive;">Get it Glow</a>
            <ul class="nav-ul nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../index.php" style="color: #4b0082;">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../index.php#products" style="color: #4b0082;">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: #4b0082;">
                        <span class="material-icons-outlined">shopping_cart</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact" style="color: #4b0082;">
                        <i class="far fa-comments fa-lg"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Detail Card ------------------------------------>
    <div class="detail-container" style="padding-left:50px;" >
        <div class="card mb-3" style="max-width: 900px; background-color: #ede7f6; box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.3);">
            <div class="row">
                <div class="col-md-4">
                    <img src="../assets/img/<?= $products["picture"]; ?>" style="width: 24rem;" height=" 375" alt="produk">
                </div>
                <div class="col-md-8">
                    <div class="card-body" style="padding-left: 100px;">
                        <h4 class="card-title"><?= $products["name"]; ?><hr></h4>
                        <a href="#" class="btn" style="text-decoration:none; text-shadow: none; background-color: #7986cb; border-radius: 20px;
                            color: white; float: right; margin: -4px 0px 0px -10px;"><i class="fas fa-heart"></i></a>
                        <p class="card-text" style="font-size: 20px;">Harga     : <?= $products["price"]; ?></p>
                        <p class="card-text">Deskripsi : <?= $products["description"]; ?></p>
                        <p class="card-text">Brand     : <?= $products["brand"]; ?></p>
                        <p class="card-text">Kategori  : <?= $products["category"]; ?></p>
                        <a href="#" class="btn" style="text-decoration:none; background-color: #7986cb; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3); 
                            color: white;">Tambah Keranjang</a>
                        <a href="#" class="btn" style="text-decoration:none; background-color: #7986cb; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3); 
                            color: white;">Beli Sekarang</a>
                        <a href="../index.php#products" class="btn" style="text-decoration:none; background-color: #7986cb; 
                            color: white; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3); ">Kembali</a>
                        <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
                <!-- Carousel mini ------------------->
                <div class="col-md-8">
                    <div id="carousel-mini" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <a href="../index.php#products">
                            <img src="../assets/img/foto10.png" class="d-block w-100" style="border-radius: 8px;">
                            </a>
                            </div>
                            <div class="carousel-item">
                            <img src="../assets/img/foto9.png" class="d-block w-100" style="border-radius: 8px;">
                            </div>
                            <div class="carousel-item">
                            <img src="../assets/img/foto8.png" class="d-block w-100" style="border-radius: 8px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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

