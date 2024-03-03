<html>
<head>
    <title>Media</title>
</head>
<body>
    <form method='Get'>
        <label for='n'>inserisci il numero di giorni di cui :</label><br>
        <input type='number' id='n' name='Num' placeholder='numero'/><br>
        <input type='submit' value='INVIO' />
    </form>

    <?php
            $n = $_GET["Num"];
            if($n>0){
                echo "<form method='Get' action='temperatur.php'>";
                for ($i = 1; $i <= $n; $i++) {
                    echo "<label for='Giorno$i'>inserisci la temperatura del giorno $i:</label><br>
                        <input type='number' id='Giorno$i' name='Giorno$i' placeholder='Giorno$i ˚'/><br>";
                }
                if($n>0){
                    echo "
                    <input type='hidden' name='n' value='$n'>
                    <input type='submit' value='INVIO' />
                    <input type='reset' value='AZZERA' /><br>
                    </form>";
                }
            }

    ?>
</body>
</html>
