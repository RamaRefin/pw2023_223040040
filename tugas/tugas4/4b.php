<?php

$komputer = ["Motherboard", "Processor", "Hard disk", "PC Cooler", "VGA Card", "SSD"];


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komputer</title>
</head>

<body>
    <h2> Macam macam perangkat keras komputer </h2>
    <ol>
        <?php for ($i = 0; $i < count($komputer); $i++) { ?>
            <li><?= $komputer[$i]; ?></li>
        <?php } ?>
    </ol>



    <h2> Macam macam perangkat keras komputer </h2>
    <ol>
        <?php
        array_unshift($komputer, 'Modem', 'Card Reader');
        sort($komputer)
        ?>
        <?php for ($i = 0; $i < count($komputer); $i++) { ?>
            <li><?= $komputer[$i]; ?></li>
        <?php } ?>
    </ol>

</body>

</html>