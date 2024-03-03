<?php
    // Componente PHP
    // Controllo se login è stato effettuato correttamente
    session_start();
    if(isset($_SESSION["username"])){
        // UTENTE corretto
        echo("L'utente è ". $_SESSION['username']);
        echo("<a href='logout.php'>ESCI</a>");
        
    }
    else{
        // LOGIN NON EFFETTUATO - ESCI
        session_destroy();
        header('Location: ./index.php');
    }

?>