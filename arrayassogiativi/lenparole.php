<html>
<head>
    <title>parola</title>
</head>
<body>
    <form method='Get'>
        <label for='n'>inserisci il numero di parole che vuoi inserire:</label><br>
        <input type='number' id='n' name='Num' placeholder='numero di parole'/><br>
        <input type='submit' value='INVIO' />
    </form>

    <?php
            $n = $_GET["Num"];
            if($n>0){
                echo "<form method='Get' action='lenparol.php'>";
                for ($i = 1; $i <= $n; $i++) {
                    echo "<label for='Parole$i'>inserisci $i"."˚ parola:</label><br>
                        <input type='text' id='Parole$i' name='Parole$i' placeholder='Parole$i ˚'/><br>";
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
