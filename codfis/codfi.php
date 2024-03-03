<?php
    $codice_fiscale=$_GET["codice_fiscale"];

    if (strlen($codice_fiscale) == 16) {
        echo "Il Codice Fiscale è corretto: $codice_fiscale";
    } else {
        echo "Il Codice Fiscale deve contenere esattamente 16 caratteri.";
    }
?>