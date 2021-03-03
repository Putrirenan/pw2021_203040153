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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .bulat {
            background-color: salmon;
            height: 50px;
            width: 50px;
            line-height: 50px;
            text-align: center;
            margin-bottom: 3px;
            border-radius: 50px;
            display: inline-block;
            border: 2px solid black;
            font-size: 30px;
        }
        .container {
            margin-right: 83%;
            padding: 10px;
            border: 1px solid black;
            
        }
    </style>
</head>

<body>

<div class="container">
    <?php for ($i = 1; $i <= 3; $i++) : ?>
        <?php for ($j = 1; $j <= $i; $j++) : ?>
            <div class="bulat"><?= $i ?></div>
        <?php endfor; ?>
        <br>
    <?php endfor; ?>
</div>

</body>

</html>