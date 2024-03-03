<?php
session_start();

// Verifica se è presente una variabile di sessione per il conteggio delle visite
if (!isset($_SESSION['visite'])) {
    // Se non esiste, inizializza la variabile di sessione a 1
    $_SESSION['visite'] = 1;
} else {
    // Se esiste, incrementa il conteggio delle visite
    $_SESSION['visite']++;
}

// Stampa il numero di visite
header('Location: ./num.php');
?>
