<?php
$mahasiswa = [
    ["Rama Dhaniaji Refin", "223040040", "Teknik Informatika", "Refinbussines@gmail.com"],
    ["Miftah fauzi", "223040039", "Teknik Informatika", "Miftah@mail.com"],
    ["Rizky Abdurahman", "223040037", "Teknik Informatika", "Rizky@mail.com"],
    ["Muhammad Rachka", "223040036", "Teknik Informatika", "Rachka@mail.com"],
    ["Muhammad Rafly", "223040043", "Teknik Informatika", "Rafly@mail.com"],
    ["Muhammad Pandu", "223040046", "Teknik Informatika", "Pandu@mail.com"],
    ["Muhammad Chafidz", "223040041", "Teknik Informatika", "Chafidz@mail.com"],
    ["Flavio boni", "223040053", "Teknik Informatika", "Flavio@mail.com"],
    ["Aurelia Melati", "223040045", "Teknik Informatika", "Aurelia@mail.com"],
    ["Reza Fahrezi", "223040044", "Teknik Informatika", "Reza@mail.com"],
];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>



<body>
    <h2> Daftar Mahasiswa </h2>


    <?php foreach ($mahasiswa as $mhs) : ?>


        <ul>
            <li> Nama : <?php echo $mhs[0]; ?></li>
            <li> Nrp :<?php echo $mhs[1]; ?></li>
            <li> Jurusan :<?php echo $mhs[2]; ?></li>
            <li> Email :<?php echo $mhs[3]; ?></li>


        </ul>

    <?php endforeach; ?>



</body>

</html>