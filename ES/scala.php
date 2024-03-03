<!DOCTYPE html>
<html>
<head>
    <title>Numeri con dimensioni crescenti</title>
    <style>
        .numero {
            font-size: 16px;
        }

        .numero[data-value="1"] {
            font-size: 20px;
        }

        .numero[data-value="2"] {
            font-size: 24px;
        }

        .numero[data-value="3"] {
            font-size: 28px;
        }

        .numero[data-value="4"] {
            font-size: 32px;
        }

        .numero[data-value="5"] {
            font-size: 36px;
        }

        .numero[data-value="6"] {
            font-size: 40px;
        }

        .numero[data-value="7"] {
            font-size: 44px;
        }

        .numero[data-value="8"] {
            font-size: 48px;
        }

        .numero[data-value="9"] {
            font-size: 52px;
        }

        .numero[data-value="10"] {
            font-size: 56px;
        }

        br {
            display: block;
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <?php
    for ($i = 1; $i <= 10; $i++) {
        echo "<span class='numero' data-value='$i'>$i</span><br>";
    }
    ?>
</body>
</html>
