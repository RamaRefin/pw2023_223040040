<?php

$jml_angkot = 10;  ///inisialisasi
$nomor_angkot =  1;

while ($nomor_angkot <= 6) {  ///kondisi terminasi
    echo "Angkot no $nomor_angkot beroprasi dengan baik. <br>";
    $nomor_angkot = $nomor_angkot + 1; ///increment
}


for ($nomor_angkot = 7; $nomor_angkot <= $jml_angkot; $nomor_angkot++) {
    echo "Angkot no $nomor_angkot Sedang Rusak. <br>";
}
