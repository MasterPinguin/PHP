<?php
session_start();

if (empty($_SESSION['prenotazioni'])) {
    echo "Nessuna prenotazione effettuata.";
    exit;
}

// Calcola il totale delle persone e trova l'evento con il massimo numero di prenotazioni
$totale_persone = 0;
$evento_massimo = '';
$max_prenotazioni = 0;

foreach ($_SESSION['prenotazioni'] as $prenotazione) {
    $totale_persone += $prenotazione['persone'];

    if ($prenotazione['persone'] > $max_prenotazioni) {
        $max_prenotazioni = $prenotazione['persone'];
        $evento_massimo = $prenotazione['evento'];
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riepilogo Prenotazioni</title>
</head>
<body>
    <h1>Riepilogo Prenotazioni</h1>
    <h2>Lista delle Prenotazioni</h2>
    <ul>
        <?php 
            for($i=0; $i+2<count($_SESSION['prenotazioni']); $i++){
                echo "<li>".$_SESSION['prenotazioni'][$i]['evento']." - ".$_SESSION['prenotazioni'][$i]['persone']." persone;</li>";
            }
        ?>
    </ul>
    <p>Totale Persone: <?= $totale_persone ?></p>
    <p>Evento con il massimo numero di prenotazioni: <?= $evento_massimo ?> (<?= $max_prenotazioni ?> persone)</p>
    <br><a href='index.php'>FAI UN ULTERIORE PRENOTAZIONE</a>"
    <br><a href='logout.php'>AZZERA LE PRENOTAZIONI</a>"
</body>
</html>