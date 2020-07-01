<?php

function papan_catur($angka) {
// tulis kode di sini
    echo "<pre>Papan catur $angka x $angka <br>";
    for ($i=0; $i <$angka ; $i++) { 
        $row = '';
        if ($i % 2 == 0) {
            for ($j=0; $j < $angka; $j++) { 
                $row .= '# ';
            }
        } else {
            for ($j=0; $j < $angka-1; $j++) { 
                $row .= " #";
            }
        }
        echo "$row <br>";
    }
    echo '<br>';
}

// TEST CASES
echo papan_catur(4) ;
/*
# # # #
 # # #
# # # #
 # # #
 */

echo papan_catur(8);
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #
*/

echo papan_catur(5) ;
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/