<?php
/*
    Renandra Rahadian Putri
    203040153
    https://github.com/Putrirenan/pw2021_203040153
    Pertemuan 3 - 19 Februari 2021
    Mempelajari mengenai Control Flow / Struktur Kendali
*/
?>

<?php

// Pengulanan
// for
// while
//do.. while
// foreach : pengulangan khusus array

// for( $i = 0; $i < 5; $i++ ) {
//     echo "Hello World! <br>";
// }

// $i = 0;
// while( $i < 5 ) {
//     echo "Hello Wolrd! <br>";
// $i++;
// }

// $i = 10;
// do {
//     echo "Hello Wolrd! <br>"
// $i++;
// } while ( $i < 5 );
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
    <style>
        .warna-baris {
            background-color: silver;
        }
    </style>
</head>
<body>

<table border="1" cellpadding="10" cellspacing="0">
   <!-- <?php
        // for( $i = 1; $i <= 3; $i++ ) {
        //     echo "<tr>";
        //     for( $j = 1; $j <= 5; $j++ ) {
        //         echo "<td>1$i,$j</td>";
        //     }
        //     echo "</tr>";
        // }
   ?> -->

<?php for( $i = 1; $i <= 5; $i++ ) : ?>
    <?php if( $i % 2 == 1 ) : ?>
        <tr class="warna-baris">
    <?php else: ?>
        <tr>
    <?php endif; ?>
            <?php for( $j = 1; $j <= 5; $j++ ) : ?>
                <td><?php echo "$i, $j"; ?></td>
            <?php endfor; ?>
        </tr>
<?php endfor; ?>

</table>
    
</body>
</html>