<?php 

$npm = "40"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php 
        
            echo "Aku adalah angka $npm </br>";
            echo "Jika aku dikali 5, maka aku menjadi ";
            echo "<b>". $npm * 5 . "</b>" . "</br>";
            echo "Jika aku dibagi 2, maka aku menjadi ";
            echo "<b>" . 200 / 2 . "</b>" . "</br>";
            echo "Jika aku ditambah 75, maka aku akan menjadi ";
            echo "<b>" . 100 + 75 . "</b></br>";
            echo "Jika aku dikurang 20, maka aku akan menjadi ";
            echo "<b>" . 175 - 20 . "</b>";
        ?>
    </p>
</body>
</html>