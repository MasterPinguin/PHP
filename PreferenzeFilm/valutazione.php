<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titolo = $_POST['titolo'];
    $val = $_POST['val'];

    // Verifica se il titolo è già presente nell'elenco
    $nontrovato = true;
    foreach ($_SESSION['libri'] as &$libro) {
        if ($libro['titolo'] === $titolo) {
            $libro['val'][] = (int)$val;
            $nontrovato = false;
            break;
        }
    }

    // Se il titolo non è presente, aggiungi un nuovo libro
    if ($nontrovato) {
        $libro = [
            'titolo' => $titolo, 
            'val' => [(int)$val]
        ];
        $_SESSION['libri'][] = $libro;
    }

    // Redirect alla pagina di riepilogo
    header("Location: riepilogo.php");
}
?>