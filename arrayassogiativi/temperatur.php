<?php
    $n = $_GET["n"];
    $giorni = [];

    for ($i = 1; $i <= $n; $i++) {
        $giorni['Giorno' . $i] = $_GET['Giorno' . $i];
    }

    $valoreMassimo = max($giorni);
    $giorno = array_keys($giorni, $valoreMassimo)[0];
    echo "La temperatura piu alta registrata è di $valoreMassimo"."˚ il giorno $giorno.";
?>