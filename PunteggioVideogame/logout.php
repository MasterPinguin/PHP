<?php
    // Componente PHP
    // Controllo se login è stato effettuato correttamente
    session_start();
    // SESSION DESTROY
    session_destroy();
    header('Location: ./index.php');
    

?>