<?php

$ukuran = 10;
$angka = 1;
$jumlah = 10;


for ($angka = 1; $angka <= $ukuran; $angka++) {
    for ($jumlah = 1; $jumlah <= $angka; $jumlah++) {
        echo "$jumlah ";
    }
    echo "<br>";
}
