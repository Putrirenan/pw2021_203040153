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

// ambil data di url
$id = $_GET['id'];
$p = query("SELECT * FROM products WHERE id = $id")[0];

// untuk mengecek tombol submit sudah ditekan atau belum
    if (isset($_POST['ubah'])) {

    // untuk mengecek data berhasil diubah atau tidak
        if (ubah($_POST) > 0) {
            echo "<script>
                    alert('Data Berhasil diubah!');
                    document.location.href = 'admin.php'; 
                </script>";
        } else {
            echo "<script>
                    alert('Data Gagal diubah!');
                    document.location.href = 'admin.php'; 
                </script>";
        }
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
        .ubah, .kembali {
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
        <h2 style="text-align:center; text-shadow: 2px 2px 2px lightgrey;">Ubah Data</h2><hr>
            <!-- Form  ------------------------->
        <form class="form" action="" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col">
                <input type="hidden" name="id" id="id" value="<?= $p['id']; ?>"> <!-- Hidden id  -->
                <div class="mb-3">
                    <input type="hidden" name="picture_lama" value="<?= $p['picture']; ?>"> <!-- Hidden picture_lama  -->
                    <label for="picture" class="form-label">Picture</label>
                    <input type="file" class="picture form-control" name="picture" id="picture" onchange="previewImage()"><br>
                    <img src="../assets/img/<?= $p['picture']; ?>" width=" 250"height="250" class="img-preview">
            </div>
            <p>saran: 262 x 262.jpeg/jpg/png</p>
        </div>

            <div class="col">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="name"
                        required value="<?= $p['name']; ?>">
                </div>
                <div class="mb-3">
                    <label for="brand" class="form-label">Brand</label>
                    <input type="text" class="form-control" name="brand" id="brand"
                        required value="<?= $p['brand']; ?>">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input type="text" class="form-control" name="description" id="description"
                        required value="<?= $p['description']; ?>">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control" name="price" id="price"
                        required value="<?= $p['price']; ?>">
                </div>
                <div class="mb-3">
                    <label for="category" class="form-label">Category</label>
                    <input type="text" class="form-control" name="category" id="category"
                        required value="<?= $p['category']; ?>">
                </div>
            </div>
        </div>
            <!-- button ----------------------->
        <button type="submit" name="ubah" class="ubah btn link-light">Ubah Data</button>
        <button type="submit" class="kembali btn link-light">
            <a href="admin.php" style="text-decoration: none; color: white;">Kembali</a>
        </button>
        

        </form>
    </div>

    <script src="../js/script.js"></script>    
</body>
</html>