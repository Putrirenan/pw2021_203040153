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
    <title>Document</title>

    <style>
    .container {
        margin-left: 25%;
        margin-right: 25%;
    }   

    .wrapper {             
        border: 2px solid black;             
        padding: 10px;         
        }     
    </style>

</head>
<body>
    <div class="container">
    <?php

        $jawabanIsset = "Isset adalah = Berfungsi untuk memeriksa apakah suatu variabel sudah diatur atau belum. 
                        Fungsi isset juga mengembalikan false jika variabel pengujian berisi nilai NULL. <br><br>";     
        $jawabanEmpty = "Empty adalah = Berfungsi sebagai penanda suatu kondisi. Contohnya yang sering kita temukan 
                        adalah dalam pengisian suatu data, apakah data tersebut ada isinya atau tidak.";

        function soal($style)
        {
            global $jawabanIsset, $jawabanEmpty;
            echo $jawabanIsset, $jawabanEmpty;
            return $style;
        }

    ?>

    <div class="wrapper">
        <?= soal(" "); ?>
    </div>
    </div>
</body>
</html>
