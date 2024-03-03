<html>
<head>
    <title>parola</title>
</head>
<body>
    <form method='Get'>
        <label for='n'>inserisci il numero di studenti che vuoi inserire:</label><br>
        <input type='number' id='n' name='Num' placeholder='numero di parole'/><br>
        <input type='submit' value='INVIO' />
    </form>

    <?php
            $n = $_GET["Num"];
            if($n>0){
                echo "<form method='Get' action='matricol.php'>";
                for ($i = 1; $i <= $n; $i++) {
                    echo "<label for='Studente$i'>inserisci i dati del $i"."˚ studente:</label><br>
                        <input type='text' id='Studente$i' name='Nome$i' placeholder='inserisci il nome'/><br>
                        <input type='number' id='Studente$i' name='Matricola$i' max='999' placeholder='inserisci la matricola'/><br>";
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
