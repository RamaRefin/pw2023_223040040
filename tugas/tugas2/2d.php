<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .line {
            line-height: 10px !important;
        }

        .kotak {
            width: 80px;
            height: 80px;
            display: inline-block;
            border: 1px solid black;
        }

        .black {
            background-color: black;
        }

        .white {
            background-color: white;
        }
    </style>
</head>

<body>
    <div class="line">

        <?php
        for ($a = 0; $a < 5; $a++) {
            for ($b = 0; $b < 5; $b++) {
                if (($a + $b) % 2 == 0) {
                    echo "<div class='kotak black'></div>";
                } else {
                    echo "<div class='kotak white'></div>";
                }
            }
            echo "<br>";
        }
        ?>

    </div>
</body>

</html>