<?php
/*
    Renandra Rahadian Putri
    203040153
    Jum'at, 13:00
*/
?>

<?php

$products = [

    [
        "picture" =>"Foto1.png", 
        "name" => "Lemon Facial Wash active",
        "brand" => "Get it Glow",
        "description" => "Smoothing Facial Wash",
        "category" => "Facial wash",
        "price" => "Rp. 148.000",
    ], 
    [
        "picture" =>"foto2.png", 
        "name" => "Get Gold Facial wash limited edition",
        "brand" => "Get it Glow",
        "description" => "Smoothing, Smoothing, Glowing Facial Wash",
        "category" => "Facial wash",
        "price" => "Rp. 245.000",
    ],
    [
        "picture" =>"foto3.png", 
        "name" => "Bestfriend Edition Package",
        "brand" => "Get it Glow",
        "description" => "Sunscreen Triple UV Protecttive, Moiturizer cream",
        "category" => "Sunscreen, Moisturizer",
        "price" => "Rp. 299.000",
    ],
    [
        "picture" =>"foto4.png", 
        "name" => "Charcoal Active Package",
        "brand" => "Get it Glow",
        "description" => "Facial Wash and Balm Cleanser",
        "category" => "Facial wash, Cleansing",
        "price" => "Rp. 299.000",
    ],
    [
        "picture" =>"foto5.png", 
        "name" => "Snail Truecica Package",
        "brand" => "Get it Glow",
        "description" => "Foaming facial wash and Cream",
        "category" => "Facial wash, Cream",
        "price" => "Rp. 398.000",
    ],
    [
        "picture" =>"foto6.png", 
        "name" => "Body Scrub Snail Solution",
        "brand" => "Get it Glow",
        "description" => "Whitening Body Scrub",
        "category" => "Body Scrub",
        "price" => "Rp. 245.000", 
    ],
    [
        "picture" =>"foto7.png", 
        "name" => "Mactha Toner Gentle Skin",
        "brand" => "Get it Glow",
        "description" => "Toner for gentle skin",
        "category" => "Toner",
        "price" => "Rp. 98.000",
    ],
    [
        "picture" =>"foto8.png", 
        "name" => "Peach puffly Liquid Soap",
        "brand" => "Get it Glow",
        "description" => "Face & Body Soap",
        "category" => "Body care",
        "price" => "Rp. 89.000", 
    ],
    [
        "picture" =>"foto9.png", 
        "name" => "Matcha Soft Bubble Soap",
        "brand" => "Get it Glow",
        "description" => "Face & Body Soap",
        "category" => "Body care",
        "price" => "Rp. 89.000", 
    ],
    [
        "picture" =>"foto10.png", 
        "name" => "Body Scrub Matcha slash",
        "brand" => "Get it Glow",
        "description" => "Body Scrub",
        "category" => "Body care",
        "price" => "Rp. 245.000",
    ],
    [
        "picture" =>"foto11.png", 
        "name" => "Balm Cleansing and cream",
        "brand" => "Get it Glow",
        "description" => "Balm Cleansing Make up",
        "category" => "Cleasing",
        "price" => "Rp. 199.000",
    ],
    [
        "picture" =>"foto12.png", 
        "name" => "Body and Hair Package",
        "brand" => "Get it Glow",
        "description" => "Body and hair care",
        "category" => "Body care",
        "price" => "Rp. 399.000",
    ],

    ];


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

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <!-- Import bootsrap.css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    
    <!-- using fontawseome ----->
    <script src="https://kit.fontawesome.com/0fc708ed1b.js"
    crossorigin="anonymous"></script>

</head>
<body>

    <div class="container mt-5 mb-5">
        <table id="cari" class="table table-hover">
            <thead>
                <tr class="tab">
                    <th>No<i class="material-icons">import_export</i></th>
                    <th>Picture<i class="material-icons">import_export</i></th>
                    <th>Name<i class="material-icons">import_export</i></th>
                    <th>Brand<i class="material-icons">import_export</i></th>
                    <th class="deskripsi">Decription<i class="material-icons">import_export</i></th>
                    <th>Price<i class="material-icons">import_export</i></th>
                    <th>Category<i class="material-icons">import_export</i></th>
                </tr>
            </thead>
            <?php $i = 1 ?>
            <?php foreach( $products as $p ) : ?>
                <tr>
                    <th scope="row"><?= $i ?></th>
                    <td><img src="img/<?= $p["picture"]; ?>"></td>
                    <td><?= $p["name"] ?></td>
                    <td><?= $p["brand"] ?></td>
                    <td><?= $p["description"] ?></td>
                    <td><?= $p["price"] ?></td>
                    <td><?= $p["category"] ?></td>
                </tr>
                <?php $i++ ?>
            <?php endforeach; ?>
        </table>
    </div>


    
</body>
</html>

