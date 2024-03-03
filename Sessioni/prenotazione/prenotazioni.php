<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $nome_evento = $_GET['nome_evento'];
    $numero_persone = $_GET['numero_persone'];

    // Verifica se l'evento è già presente nelle prenotazioni
    $nontrovato = true;
    foreach ($_SESSION['prenotazioni'] as &$prenotazione) {
        if ($prenotazione['evento'] === $nome_evento) {
            $prenotazione['persone'] += (int)$numero_persone;
            $nontrovato = false;
            break;
        }
    }

    // Se l'evento non è presente, aggiungi una nuova prenotazione
    if ($nontrovato) {
        $prenotazione = [
            'evento' => $nome_evento, 
            'persone' => (int)$numero_persone
        ];
        $_SESSION['prenotazioni'][] = $prenotazione;
    }

    // Redirect alla pagina di riepilogo
    header("Location: riepilogo.php");
}
?>