<?php
    session_start();

    $_SESSION['username'] = 'rs200';

    if (!isset($_SESSION['username'])) {
        header('Location:login.php');
        exit;
    } else {
        echo "Benvenuto utente ".$_SESSION['username'];
    }

    $_SESSION['username'] = 'rs200';
    $_SESSION['username'] = 'f40';

    echo $_SESSION['username']; // Stampa f40

    if (isset($_POST['logout'])) {
        session_destroy();
        header('Location:login.php');
        exit;
    }

    $_SESSION['username'] = 'rs200';
    unset($_SESSION['username']);

    if (!isset($_SESSION['username'])) {
        echo "La variabile di sessione non esiste più";
    }

?>