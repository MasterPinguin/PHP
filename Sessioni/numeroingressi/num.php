<?php
    // Componente PHP
    // Controllo se login è stato effettuato correttamente
    session_start();

    echo "Numero di visite: " . $_SESSION['visite'];
    echo("<br><a href='index.php'>INCREMENTA REFRESHANDO</a>");
    echo("<br><a href='logout.php'>AZZERA IL CONTATORE FACENDO IL LOGOUT</a>");

?>