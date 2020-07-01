<?php
function pasangan_terbesar($angka){
// kode di sini
    $angka = "$angka";
    $len = strlen($angka);
    $puluhan = 0;
    $satuan = 0;
    for ($i=0; $i < $len; $i++) { 
        if ($angka[$i] > $puluhan){
            $puluhan = $angka[$i];
            $satuan = $angka[$i+1];
        } else if ($angka[$i] > $puluhan){
            if ($angka[$i+1] > $puluhan){
                $satuan = $angka[$i+1];
            }
        }
    }

    return "Pasangan terbesar $angka => " . (10*$puluhan + $satuan) . "<br>";
}

// TEST CASES
echo pasangan_terbesar(641573); // 73
echo pasangan_terbesar(12783456); // 83
echo pasangan_terbesar(910233); // 91
echo pasangan_terbesar(71856421); // 85
echo pasangan_terbesar(79918293); // 99

?>