<?php
function tampilkanAngka($jumlah)
{
    $angka = 1;
    for ($i = 1; $i <= $jumlah; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $angka++ . " ";
        }
        echo "<br>";
    }
}


tampilkanAngka(5);
