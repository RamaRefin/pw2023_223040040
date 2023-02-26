<?php

$depan = "Rama";
$belakang = "Refin";

for ($nilai_awal = 1; $nilai_awal <= 100; $nilai_awal++) {

    if ($nilai_awal % 3 == 0 and $nilai_awal % 5 == 0) {
        echo "$depan <br>";
    } elseif ($nilai_awal % 5 == 0) {
        echo "$belakang <br>";
    } elseif ($nilai_awal % 3 == 0) {
        echo "$depan <br>";
    } else {
        echo "$nilai_awal <br>";
    }
}
