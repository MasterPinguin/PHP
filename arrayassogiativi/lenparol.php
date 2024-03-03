<?php
    $n = $_GET["n"];
    $parole = [];

    for ($i = 1; $i <= $n; $i++) {
        $parole[$_GET['Parole'.$i]] = strlen($_GET['Parole'.$i]);
    }

    $lunghezzaMassima = max($parole);
    $parolePiùLunghe = array_keys($parole, $lunghezzaMassima)[0];

    echo "La parola più lungha è $parolePiùLunghe (lunghezza: $lunghezzaMassima)";
?>
