<?php

$binatang =  ['kelinci🐇', 'monyet🐵', 'babi🐷', 'ayam🐔', 'lizard🦎'];
$warna = ['merah', 'hijau', 'biru', 'coklat'];



// MENGURUTKAN ARRAY
// sort() , rsort()

sort($warna); // MENGURUTKAN SESUAI ABJAD (A-Z)
rsort($binatang); // MENGURUTKAN SESUAI ABJAD TAPI KEBALIKAN (Z-A)



// CARA MENCENTAK ARRAY UNTUK USER
// FOR, FOREACH
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HayDay</title>
</head>


<!-- < count($binatang); = JIKA MENGGUNAKAN COUNT TIDAK PERLU MENGGANTI VARIABEL AKHIR -->

<body>
    <h2> Daftar binatang </h2>
    <ul>
        <?php for ($i = 0; $i < count($binatang); $i++) { ?>
            <li><?= $binatang[$i]; ?></li>
        <?php } ?>
    </ul>



    <h2> Daftar binatang </h2>
    <ul>
        <?php for ($i = 0; $i < 4; $i++) { ?>
            <li><?= $binatang[$i]; ?></li>
        <?php } ?>
    </ul>

    <h2> Daftar warna </h2>
    <ul>
        <?php for ($i = 0; $i < 4; $i++) { ?>
            <li><?= $warna[$i]; ?></li>
        <?php } ?>
    </ul>

    <h2> Daftar warna dengan bintang </h2>
    <ul>
        <?php for ($i = 0; $i < 4; $i++) { ?>
            <li><?= $warna[$i]; ?> = <?= $binatang[$i]; ?></li>
        <?php } ?>
    </ul>


    <hr>

    <h2> Daftar binatang </h2>
    <ol>
        <?php foreach ($binatang as $b) { ?>
            <li> <?= $b ?></li>
        <?php } ?>
    </ol>

    <hr>

    <h2> Daftar warna </h2>
    <ol>
        <?php foreach ($warna as $w) { ?>
            <li> <?= $w ?></li>
        <?php } ?>
    </ol>



</body>

</html>