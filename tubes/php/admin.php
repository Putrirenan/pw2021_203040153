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
            font-size: 24px;
        }
        nav a .nav-link {
            font-size: 14px;
            color: #4b0082;
        }
        nav a.login,
        nav a.logout {
            background-color: #191970;
            color: white;
            border-radius: 8px;
            margin: 0px 5px 0px 5px;
        }
        .login {
            margin: 2% 0px 0px 3.4%;
            border-radius: 8px 0px 8px 0px;
        }
        .nav a.login a:hover,
        .nav a.logout a:hover {
            background-color: #8A2BE2!important;
            border-radius: 8px;
            margin: 0px 5px 0px 5px;
            transition: all ease 0.5s;
        }
            /* Table CSS */
        .container {   
            margin-top: 20px;
        }
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

        .logout {
            margin: -50px 0px 10px 90%;
        }
        .daftar {
            padding: 50px 0px 0px 0px !important;
        }

    </style>

</head>
<body>

    <!-- Navbar ------------------------------------------>
    <nav class="navbar fixed-top" style="background-color: #FAF9F6; box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);"> <!-- #dda0dd -->
        <div class="container-fluid" style="width: 90%; height: 50px;">
            <a class="navbar-brand" href="#" style="margin-left: 70px; font-size: 28px; color: #4b0082; font-family: 'Pacifico', cursive;">Get it Glow</a>
            <ul class="nav-ul nav justify-content-center" >
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
                    <a class="login nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Table ------------------------------------------->
    <div class="containe-table container-fluid mt-5 mb-5">
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
                <div class="add">
                    <a href="tambah.php" class="link-dark btn  btn-m" style="text-decoration:none; margin-left: 50px; 
                        margin-bottom: -100px; background-color: #7986cb; color: white;">Tambah Data</a>
                </div> <br>

            <!-- Searching ------------------>
            <form action="" method="get">
                <input class="form-control" style="width: 500px; margin-left: 460px;" type="text" name="keyword" autofocus>
                <button class="link-dark btn btn-sm" type="submit" name="cari" style="margin: -65px 0px 0px 970px; 
                    text-decoration:none; background-color: #7986cb; color: white;">Cari</button>
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
    
</body>
</html>