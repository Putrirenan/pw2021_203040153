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
</head>
<body>

    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th></th>
            <?php for($i = 1; $i <= 5; $i++) : ?>
                <th> kolom <?= $i; ?></th>
            <?php endfor; ?>
        </tr>

        <?php for( $j = 1; $j <= 5; $j++) : ?>
        <tr>
            <th>Baris <?= $j; ?></th>
            <?php for ($i = 1; $i <= 5; $i++ ) :?>
            <td><?= "Baris $j, Kolom $i"?></td>
            <?php endfor; ?>
        </tr>
            <?php endfor; ?>

    </table>
    
</body>
</html>
