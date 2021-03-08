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
        .style1 {             
            width: 50%;   
            height: 50px;          
            margin: auto;           
            border: 2px solid black;             
            box-shadow: 0 0 15px #888;             
            border-radius: 5px;         
            }          
            .style2 {             
                font-size: 28px;             
                font-family: arial;             
                color: #8c782d;             
                font-style: italic;             
                font-weight: bolder;             
                margin-left: 15px;    
                margin-top: 10px;     
            }
    </style> 

</head>
<body>

    <?php 
        function gantiStyle($tulisan, $style1 = "style1", $style2 = "style2") {  
            return "<div class=$style1><p class=$style2>$tulisan</p></div>";
        }

        echo gantiStyle("Selamat Datang di Praktikum PW");

    ?>

    
</body>
</html>