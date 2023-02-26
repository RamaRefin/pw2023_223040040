<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 2c php</title>
    <style>
        .kotak {
            background-color: lightcoral;
            display: inline-block;
            width: 50px;
            height: 50px;
            font-size: 20px;
            text-align: center;
            line-height: 50px;
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <?php

    $ukuran = 1;
    $angka = 10;
    $jumlah = 10;

    for ($angka = 10; $angka >= $ukuran; $angka--) {
        for ($jumlah = 1; $jumlah <= $angka; $jumlah++) {
            echo "<div class='kotak'>" . $jumlah . "</div>";
        }
        echo "<br>";
    }
    ?>

</body>

</html>