<?php 

// 203040153_Renandra Rahadian Putri
function cetak_bintang($angka) {
    for( $i = 1; $i <= $angka; $i++ ) {
        for( $j = 1; $j <= $i; $j++ ) {
            echo "*";
        } 
        echo "<br>";
    }
}
    echo cetak_bintang(7);

?>