<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $punt = $_POST['punt'];

    // Verifica se il nome è già presente nell'elenco
    $nontrovato = true;
    foreach ($_SESSION['Vg'] as &$Vg) {
        if ($Vg['nome'] === $nome) {
            $Vg['punt'][] = (int)$punt;
            $nontrovato = false;
            break;
        }
    }

    // Se il nome non è presente, aggiungi un nuovo Videogame
    if ($nontrovato) {
        $Vg = [
            'nome' => $nome, 
            'punt' => [(int)$punt]
        ];
        $_SESSION['Vg'][] = $Vg;
    }

    // Redirect alla pagina di riepilogo
    header("Location: riepilogo.php");
}
?>