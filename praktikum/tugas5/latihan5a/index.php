<?php
/*
    Renandra Rahadian Putri
    203040153
    Jum'at, 13:00
*/
?>

<?php
// Menghubungkan dengan file php lainnya
require 'php/functions.php';
// Melakukan query
$products = query("SELECT * FROM products")

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
    .navbar {
        font-weight: bold;
    }
    a {
        border-radius: 10px;
    }
    }
    a .navbar-brand {
        font-size: 18px;
    }
    a .nav-link {
        font-size: 14px;
    }
    a:hover {
        background-color: #ffd700;
        color: #f8f8ff;
        box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2);
        transition: all ease 0.5s;
    }

    </style>

</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-warning" >
    <div class="container-fluid">
        <a class="navbar-brand" href="#" style="margin-left: 70px;">Get it Glow</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup" >
        <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            <a class="nav-link" href="#">Products</a>
            <a class="nav-link" href="#">Details</a>
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Help</a>
        </div>
        </div>
    </div>
    </nav>

    <div class="container" style=" margin-top: 20px;">
        <?php foreach($products as $p) : ?>
                <p class="nama">
                    <a class="link-dark btn btn-warning" style="text-decoration:none;" href="php/detail.php?id=<?= $p['id'] ?>">
                        <?= $p["name"] ?>
                    </a>
                </p>
        <?php endforeach; ?>

    </div>


    
</body>
</html>








