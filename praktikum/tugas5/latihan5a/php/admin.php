<?php
/*
    Renandra Rahadian Putri
    203040153
    Jum'at, 13:00
*/
?>

<?php 
// menghubungkan dengan file php lainnya
require 'functions.php';
// melakukan query
$products = query("SELECT * FROM products");

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
    
    </style>

</head>
<body>
    
    <div class="container-fluid mt-5 mb-5">
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
            <?php $i = 1; ?>
            <?php foreach ($products as $p) : ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td>
                        <a class="link-dark btn btn-warning btn-sm" style="text-decoration:none;">Ubah</a>
                        <a class="link-dark btn btn-warning btn-sm" style="text-decoration:none;">Hapus</a>
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
        </table>
    </div>
    
    
</body>
</html>