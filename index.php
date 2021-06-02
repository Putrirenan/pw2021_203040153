<?php
/*
    Renandra Rahadian Putri
    203040153
    Jum'at, 13:00
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Renandra Rahadian Putri 203040153</title>

    <link rel="stylesheet" href="css/style.css">

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
    * {
        font-family: 'Quicksand';
    }
    nav.navbar {
        font-weight: bold;
    }
    nav ul.nav-ul {
        margin-bottom: -20px;
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
    body {
        background-image: url(tubes/assets/img/slider/bg2.png); 
        background-repeat: no-repeat;  
        background-size: cover;
        margin: 100px 0px 0px 250px;
    }
    body h1 {
        color: black;
        text-align: center; 
        margin-left: -210px; 
        margin-bottom: 50px;
        font-family: 'Pacifico', cursive; 
        text-shadow: 2px 2px 8px rgba(0,0,0, 0.3);
    }
    .kuliah img , .praktikum img, .tubes img {
        border-radius: 20px !important;
        margin-bottom: 15px;
        box-shadow: 2px 2px 8px rgba(0,0,0, 0.5);
    }
    .kuliah p, .praktikum p, .tubes p {
        position: relative !important;
        margin: 82px 0px 0px -144px !important;
        color: black;
        float: left;
        font-weight: bold;
        text-shadow: 2px 2px 8px rgba(0,0,0, 0.3);
    }
    .praktikum p {
        position: relative !important;
        margin: 86px 0px 0px -125px !important;
        color: black;
        float: left;
        font-weight: bold;
        text-shadow: 2px 2px 8px rgba(0,0,0, 0.3);
    }
    .tubes p {
        position: relative !important;
        margin: 82px 0px 0px -118px !important;
        color: beige;
        float: left;
        font-weight: bold;
        text-shadow: 2px 2px 8px rgba(0,0,0, 0.3);
    }
    .profil {
      background-color: #f3e5f5;
      margin: 0px 250px 50px 0px;
      padding: 20px 0px 20px 20px;
      border-radius: 40px;
      box-shadow: 2px 2px 8px rgba(0,0,0, 0.2);
    }
    .profil img {
      border-radius: 50%;
    }
    </style>

</head>
<body id="home" class="scrollspy">

    <section class="profil">
      <div class="container" style="margin-left: 100px;">
        <div class="row">
          <div class="col">
            <h4>Halo, Saya Renandra Rahadian Putri.</h4>
            <h4>Untuk melihat tugas-tugas saya silahkan klik menu tugas <br>yang ada di bawah! ^^</h4>
          </div>
        </div>
      </div>
    </section>

    <section class="kuliah">
      <div class="container">
        <h1>Kuliah</h1>
          <div class="row justify-content-start">
            <div class="col-4">
              <a href="kuliah/pertemuan2"><img src="tubes/assets/img/kuliah/p1.png" width="180" style="margin: 5px;" class="rounded float-start">
              <p>Pertemuan 2</p></a>
            </div>
            <div class="col-4">
              <a href="kuliah/pertemuan3"><img src="tubes/assets/img/kuliah/p1.png" width="180" style="margin: 5px;" class="rounded float-start">
              <p>Pertemuan 3</p></a>
            </div>
            <div class="col-4">
              <a href="kuliah/pertemuan4"><img src="tubes/assets/img/kuliah/p1.png" width="180" style="margin: 5px;" class="rounded float-start">
              <p>Pertemuan 4</p></a>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-4">
              <a href="kuliah/pertemuan5"><img src="tubes/assets/img/kuliah/p1.png" width="180" style="margin: 5px;" class="rounded float-start">
              <p>Pertemuan 5</p></a>
            </div>
            <div class="col-4">
              <a href="kuliah/pertemuan6"><img src="tubes/assets/img/kuliah/p1.png" width="180" style="margin: 5px;" class="rounded float-start">
              <p>Pertemuan 6</p></a>
            </div>
          </div>
          <div class="row justify-content-end">
            <div class="col-4">
              <a href="kuliah/pertemuan7"><img src="tubes/assets/img/kuliah/p1.png" width="180" style="margin: 5px;" class="rounded float-start">
              <p>Pertemuan 7</p></a>
            </div>
            <div class="col-4">
              <a href="kuliah/pertemuan8"><img src="tubes/assets/img/kuliah/p1.png" width="180" style="margin: 5px;" class="rounded float-start">
              <p>Pertemuan 8</p></a>
            </div>
            <div class="col-4">
              <a href="kuliah/pertemuan9"><img src="tubes/assets/img/kuliah/p1.png" width="180" style="margin: 5px;" class="rounded float-start">
              <p>Pertemuan 9</p></a>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-4">
              <a href="kuliah/pertemuan10"><img src="tubes/assets/img/kuliah/p1.png" width="180" style="margin: 5px;" class="rounded float-start">
              <p>Pertemuan 10</p></a>
            </div>
            <div class="col-4">
              <a href="kuliah/pertemuan11"><img src="tubes/assets/img/kuliah/p1.png" width="180" style="margin: 5px;" class="rounded float-start">
              <p>Pertemuan 11</p></a>
            </div>
          </div>
          <div class="row justify-content-between">
            <div class="col-4">
              <a href="kuliah/pertemuan12"><img src="tubes/assets/img/kuliah/p1.png" width="180" style="margin: 5px;" class="rounded float-start">
              <p>Pertemuan 12</p></a>
            </div>
            <div class="col-4">
              <a href="kuliah/pertemuan13"><img src="tubes/assets/img/kuliah/p1.png" width="180" style="margin: 5px;" class="rounded float-start">
              <p>Pertemuan 13</p></a>
            </div>
          </div>
      </div>
    </section> <br><br><br><br>

    <section class="praktikum">
      <div class="container">
        <h1>Praktikum</h1>
        <div class="row justify-content-around">
          <div class="col-4">
            <a href="praktikum/tugas1"><img src="tubes/assets/img/kuliah/p2.png" width="180" style="margin: 5px; margin-bottom: 25px;" class="rounded float-start">
            <p>Tugas 1</p></a>
          </div>
          <div class="col-4">
            <a href="praktikum/tugas2"><img src="tubes/assets/img/kuliah/p2.png" width="180" style="margin: 5px; margin-bottom: 25px;" class="rounded float-start">
            <p>Tugas 2</p></a>
          </div>
        </div>
        <div class="row justify-content-between">
          <div class="col-4">
            <a href="praktikum/tugas3"><img src="tubes/assets/img/kuliah/p2.png" width="180" style="margin: 5px; margin-bottom: 25px;" class="rounded float-start">
            <p>Tugas 3</p></a>
          </div>
          <div class="col-4">
            <a href="praktikum/tugas4"><img src="tubes/assets/img/kuliah/p2.png" width="180" style="margin: 5px; margin-bottom: 25px;" class="rounded float-start">
            <p>Tugas 4</p></a>
          </div>
        </div>
        <div class="row justify-content-evenly">
          <div class="col-4">
            <a href="praktikum/tugas5"><img src="tubes/assets/img/kuliah/p2.png" width="180" style="margin: 5px; margin-bottom: 25px;" class="rounded float-start">
            <p>Tugas 5</p></a>
          </div>
          <div class="col-4">
            <a href="praktikum/tugas6"><img src="tubes/assets/img/kuliah/p2.png" width="180" style="margin: 5px; margin-bottom: 25px;" class="rounded float-start">
            <p>Tugas 6</p></a>
          </div>
        </div>
      </div>
    </section>

    <section class="tubes">
      <div class="container">
        <h1>Tubes</h1>
          <div class="row justify-content-start" style="margin: 0px 0px 200px 400px;">
            <div class="col-4 center">
              <a href="tubes/index.php"><img src="tubes/assets/img/kuliah/p3.png" width="180" style="margin: 5px;" class="rounded float-start">
              <p>Tubes</p></a>
            </div>
          </div>
      </div>
    </section>



  

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