<?php
    // Renandra Rahadian Putri
    // 203040153
    // Jum'at, 13:00


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
    <link href ="assets/img/logo.png" rel="shortcut icon">

    <!-- Import Google font Pacifio -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined"
      rel="stylesheet">

    <!-- Import Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    
    <!-- using fontawseome ----->
    <script src="https://kit.fontawesome.com/0fc708ed1b.js"
    crossorigin="anonymous"></script>

    <style>
    .navbar{
        background-color: #FAF9F6; 
        /* box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3); */
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
    .tales {
        /* height: 500px; */
    }
    .tentang-sec {
        background-image: url(assets/img/slider/about.png); 
        background-repeat: no-repeat;
        background-position: center;
        margin: auto;
    }
    .tentang-container {
        margin: auto;
        padding: 0px 20px 0px 20px;
        height: 400px;
        color: #000;
        align-content: center;
    }
    .tentang-container h1 { 
        text-align: center; 
        padding-top: 65px; 
        padding-bottom: 20px;
        font-family: 'Pacifico', cursive; 
        text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.3);
    }
    .lihat-slider { text-decoration:none; background-color: #ab47bc; color: white; border-radius: 8px;}
    .products {
        background-image: url(assets/img/slider/bg.png); 
        background-repeat: no-repeat;  
        background-size: cover;
    }
    section .container {
        padding: 0px 0px 100px 70px;
    }
    .container-delivery {
        background-color: #424242;
        text-align: center;
        padding: 25px 0px 10px 0px;
        color: #f5f5f5;
        font-size: 12px;
    }
    </style>

</head>
<body id="home" class="scrollspy">

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
                    <a class="nav-link active" aria-current="page" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#products">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">
                    <i class="fas fa-shopping-cart fa-lg"><br><p style="font-size: 9px; margin-bottom: -14px;">Cart+</p></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">
                    <i class="far fa-comments fa-lg"><br><p style="font-size: 9px; margin-bottom: -14px;"><strong>Chat</strong></p></i>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Help
                    </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="#">Account</a></li>
                    <li><a class="dropdown-item" href="#">Security</a></li>
                    <li><a class="dropdown-item" href="#">Payment</a></li>
                    <li><a class="dropdown-item" href="#">Customer Service</a></li>
                </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="php/login.php" target="_blank"><button type="button" class="btn text-light btn-sm" style="background-color: #191970; font-weight: bold;">Login</button></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="php/registrasi.php" target="_blank"><button type="button" class="btn text-light btn-sm" style="background-color: #191970; font-weight: bold;">Signup</button></a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <!-- Carousel -------------------------------------->
    <div id="carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="row">
          <div class="col-md-12" style="padding: 0px !important; margin: 0px -12px !important;">
          <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="assets/img/slider/p1.png" class="tales d-block w-100">
                <div class="carousel-caption text-light d-none d-md-block">
                    <h5 style="text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.5);">Lihat Produk terbaik toko!</h5>
                    <p><a href="#products" class="lihat-slider link-dark btn btn-xl">Lihat</a></p>
                </div>
            </div> 
            <div class="carousel-item">
            <img src="assets/img/slider/p2.png" class="tales d-block w-100">
            </div>
            <div class="carousel-item">
            <img src="assets/img/slider/p3.png" class="tales d-block w-100">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
          </div>
        </div>
    </div>

    <!-- About ------------------------------->
    <section  id="tentang" class="tentang-sec scrollspy white-text center">
        <div class="tentang-container col-md-7 g-4">
            <h1>About Us</h1>
            <h4>Mengapa Harus Get It Glow?</h4>
            <p>Karena kami akan senantiasa memberikan pelayanan terbaik di 
                tangan para profesional Handal. Dengan Konsep Beauty Technology yang mana 
                perpaduan antara Produk Kecantikan kami dengan bantuan Technologi Facial Treatment 
                Terbaik yang kami punya untuk perawatan berkualitas. Kulit cantik dan Rambut 
                sehat terawat bukan lagi sekedar Impian.</p>
        </div>
    </section>

    <!-- Promo -------------------------------->
    
    
    <!-- Products ----------------------------->
    <section id="products" class="products grey lighten-4 scrollspy">
            <h1 style="text-align: center; padding-top: 30px; text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.3); 
            color:black; font-family: 'Pacifico', cursive;">Products</h1><br>

        <!-- Searching ----------------------->
        <form action="" method="POST">
            <div class="row justify-content-center">
              <div class="col-md-3">
                <input class="form-control" style="width: 450px;" type="text" name="keyword" class="keyword"
                    placeholder="Cari produk skincare disc10%.." autocomplete="off">
                <button class="link-dark btn btn-sm" type="submit" name="cari" 
                style="margin: -65px 0px 0px 460px; text-decoration:none; background-color: #7986cb; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3); 
                        color: white;">Cari</button>
              </div>
            </div>
        </form>

        <div class="container">
            <!-- Cek apabila data tidak ada -->
            <?php if (empty($products)) : ?>
                <tr>
                <td colspan="4">
                    <p style="color: red; font-style:italic; text-align:center;">data tidak ditemukan</p>
                </td>
                </tr>
            <?php endif; ?>
            <!-- Row ------------>
        <div class="row">
            <?php  $i = 1;
            foreach($products as $p) : ?>
                <div class="col-md-3 g-4">
                    <div class="card" style="width: 16rem;">
                        <a class="" href="php/detail.php?id=<?= $p['id']; ?>">
                            <img src="assets/img/<?= $p["picture"]; ?>" class="card-img-top"
                                height=" 250">
                        </a>
                        <div class="card-body" style="background-color: #d7ccc8;">
                            <p class="card-text">
                                <a class="link-dark" style="text-decoration:none;" href="php/detail.php?id=<?= $p['id'] ?>">
                                    <?= $p["name"] ?>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>    
        </div>
        </div>
    </section>

      <!-- Delivery --------------------------------->
    <div class="container-delivery scrollspy">
       <div class="row justify-content-center">
          <div class="col-md-2">
            <ul style="list-style: none;">
              <li><i class="fas fa-headset fa-5x"></i><br>Customers Service</li>
            </ul>
          </div>
          <div class="col-md-2">
            <ul style="list-style: none;">
              <li><i class="fab fa-shopify fa-5x"></i><br>Free Shopping bag</li>
            </ul>
          </div>
          <div class="col-md-2">
            <ul style="list-style: none;">
              <li><i class="fas fa-shipping-fast fa-5x"></i><br>Fast Shipping</li>
            </ul>
          </div>
          <div class="col-md-2">
            <ul style="list-style: none;">
              <li><i class="fas fa-box-open fa-5x"></i><br>Secured Packaging</li>
            </ul>
          </div>
          <div class="col-md-2">
            <ul style="list-style: none;">
              <li><i class="fab fa-cc-visa fa-5x"></i><br>Multi Payment</li>
            </ul>
          </div>
       </div>
    </div>


    <!-- Card --------------------------------->
    <!-- <div class="container" style=" margin-top: 20px;">
        <?php foreach($products as $p) : ?>
                <p class="nama">
                    <a class="link-dark btn btn-warning" style="text-decoration:none;" href="php/detail.php?id=<?= $p['id'] ?>">
                        <?= $p["name"] ?>
                    </a>
                </p>
        <?php endforeach; ?>
    </div> -->

    <!-- Footer ---------------------------------------------->
  <footer class="text-black p-5">
    <div class="row justify-content-center">
      <div class="col-md-3">
        <ul>
          <li><h4><strong style="font-family: 'Pacifico', cursive; margin-left: 35px;">Get it Glow</strong></h4></li>
          <li class="text-light">Be Happy and Health Skin!</li>
        </ul>
      </div>
    </div>
        <!-- Menu footer ------------------------------->
    <div class="row justify-content-center menu" style="margin-top: 30px;">
      <div class="col-md-2">
        <ul>
          <li><h5><strong>ABOUT US</strong></h5></li>
          <li><a href="#tentang">About us</a></li>
          <li><a href="#">Branch Store</a></li>
          <li><a href="https://www.instagram.com/msglowclinicbekasi/" target="_blank">Cooperation</a></li>
        </ul>
      </div>
      <div class="col-md-2">
        <ul>
          <li><h5><strong>SHOPPING</strong></h5></li>
          <li><a href="#products">Products</a></li>
          <li><a href="#">Promo</a></li>
          <li><a href="https://www.paypal.com/id/home" target="_blank">Payment</a></li>
        </ul>
      </div>
      <div class="col-md-2">
        <ul>
          <li><h5><strong>DELIVERY</strong></h5></li>
          <li><a href="#">Pickup in store</a></li>
          <li><a href="https://www.grab.com/id/" target="_blank">Grab Send</a></li>
          <li><a href="https://www.gojek.com/id-id/" target="_blank">GO Send</a></li>
        </ul>
      </div>
      <div class="col-md-2">
        <ul>
            <li><h5><strong>PAYMENT</strong></li>
            <li><a href="https://bankmandiri.co.id/" target="_blank">Mandiri</a></li>
            <li><a href="https://ib.bri.co.id/ib-bri/" target="_blank">BRI</a></li>
            <li><a href="https://ibank.bni.co.id/corp/AuthenticationController?__START_TRAN_FLAG__=Y&FORMSGROUP_ID__=AuthenticationFG&__
            EVENT_ID__=LOAD&FG_BUTTONS__=LOAD/ACTION.LOAD=Y&AuthenticationFG.LOGIN_FLAG=1&BANK_ID=BNI01&LANGUAGE_ID=002" target="_blank">BNI</a></li>
        </ul>
      </div>
    </div>
        <!-- Social Icons ---------------------------------->
    <div class="row justify-content-center social">
        <div class="col-1" style="margin: 30px -35px 15px -35px;">
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
        </div>
        <div class="col-1" style="margin: 30px -35px 15px -35px;">
            <a href="mailto:putrirenan@gmail.com" target="_blank"><i class="far fa-envelope"></i></a>
        </div>
        <div class="col-1" style="margin: 30px -35px 15px -35px;">
            <a href="https://instagram.com/_renandrrp?utm_medium=copy_link" target="_blank"><i class="fab fa-instagram"></i></a>
        </div>
        <div class="col-1" style="margin: 30px -35px 15px -35px;">
            <a href="https://twitter.com/NCTsmtown?s=09" target="_blank"><i class="fab fa-twitter"></i></a>
        </div>
        <div class="col-1" style="margin: 30px -35px 15px -35px;">
            <a href="https://youtube.com/channel/UCx4vtc-Z47HWvLf5FSucxFw" target="_blank"><i class="fab fa-youtube"></i></a>
        </div>
    </div>
        <!-- Copyright ------------------------------------->
    <div class="row justify-content-center">
      <div class="col-md-3" style="margin-bottom: -35px; font-size: 14px;">
          <p class="copyright"><b>Copyright by Get it Glow Store Indonesia</b></p>
      </div>
    </div>
  </footer>

    <style>
    footer {
        background-color: #708090;
    }
    footer ul {
        list-style: none;
    }
    footer a {
        text-decoration: none;
        color: snow;
    }
    .menu a:hover {
        color: lightskyblue;
        text-shadow: 2px 2px 12px rgba(0, 0, 0, 0.5);
        transition: all ease 0.5s;
    }
    .social a {
        width: 40px;
        height: 40px;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #e6e3e3;
        /* margin: 0px 10px 0px 0px; */
        color: #3f51b5 ;
        border-radius: 50%;
    }
    .social a:hover{
        background-color: #191970;
        box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2);
        transition: all ease 0.5s;
    }
    .social a:hover i {
        color: #fff;
        transition: all ease 0.5s;
    }
    </style>


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








