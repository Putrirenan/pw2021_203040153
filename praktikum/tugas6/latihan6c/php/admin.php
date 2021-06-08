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
            margin-top: 20px;
        }

        .table {
            border: 3px solid lightgrey;
            margin-top: 10px;
            margin-bottom: 10px;
            text-align: center;
        }
        
        .update, .delete {
            float: left;
            padding: 2px;
        }

        .logout {
            margin: -50px 0px 10px 90%;
        }

    </style>

</head>
<body>
    
    <div class="container-fluid mt-5 mb-5">
        <h1 style="text-align:center; text-shadow: 2px 2px 2px lightgrey;">Daftar Product</h1> <hr>
        <table class="table table-hover table-sm table-responsive table align-middle">
            <thead class="table-warning">
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
                    <a href="tambah.php" class="link-dark btn btn-warning btn-sm" style="text-decoration:none;">Tambah Data</a>
                </div> <br>

                <!-- Logout ----------------->
                <div class="logout">
                    <a href="logout.php" class="link-dark btn btn-warning btn-sm" style="text-decoration:none;">Logout</a>
                </div>

            <!-- Searching ------------------>
            <form action="" method="get">
                <input class="form-control" style="width: 300px;" type="text" name="keyword" autofocus>
                <button class="link-dark btn btn-warning btn-sm" type="submit" name="cari" 
                        style="margin: -65px 0px 0px 310px;">Cari</button>
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
                            <div class="update"><a href="ubah.php?id=<?= $p['id']; ?>" class="link-dark btn btn-warning btn-sm" style="text-decoration:none;">Ubah</a></div>
                            <div class="delete"><a href="hapus.php?id=<?= $p['id']; ?>" onclick="return confirm('Hapus Data??')" class="link-dark btn btn-warning btn-sm" style="text-decoration:none;">Hapus</a></div>
                        </td>
                        <td><img src="../assets/img/<?= $p["picture"]; ?>"></td>
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