<?php
session_start();

// Inizializzazione delle variabili di sessione se non esistono già
if (!isset($_SESSION['sfondo'])) {
    $_SESSION['sfondo'] = 'bianco'; // colore di sfondo predefinito
}

if (!isset($_SESSION['tipo_font'])) {
    $_SESSION['tipo_font'] = 'Arial, sans-serif'; // tipo di font predefinito
}

if (!isset($_SESSION['dimensione_caratteri'])) {
    $_SESSION['dimensione_caratteri'] = '16px'; // dimensione dei caratteri predefinita
}

// Verifica se è stato inviato un modulo per aggiornare le preferenze
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Aggiorna le variabili di sessione con i valori inviati dal modulo
    $_SESSION['sfondo'] = $_POST['sfondo'];
    $_SESSION['tipo_font'] = $_POST['tipo_font'];
    $_SESSION['dimensione_caratteri'] = $_POST['dimensione_caratteri'];
}

// Form HTML per la selezione delle preferenze
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preferenze Utente</title>
    <style>
        body {
            background-color: <?php echo $_SESSION['sfondo']; ?>;
            font-family: <?php echo $_SESSION['tipo_font']; ?>;
            font-size: <?php echo $_SESSION['dimensione_caratteri']."px"; ?>;
        }
        label {
            font-family: <?php echo $_SESSION['tipo_font']; ?>;
            font-size: <?php echo $_SESSION['dimensione_caratteri']."px"; ?>;
        }
    </style>
</head>
<body>
    <h1>Imposta le tue preferenze</h1>
    <form method="post" action="">
        <label for="sfondo">Colore sfondo:</label>
        <input type="color" id="sfondo" name="sfondo" value="<?php echo $_SESSION['sfondo']; ?>">

        <label for="tipo_font">Tipo di font:</label>
        <select id="tipo_font" name="tipo_font">
            <option value="Arial, sans-serif" <?php echo ($_SESSION['tipo_font'] === 'Arial, sans-serif') ? 'selected' : ''; ?>>Arial</option>
            <option value="Verdana, sans-serif" <?php echo ($_SESSION['tipo_font'] === 'Verdana, sans-serif') ? 'selected' : ''; ?>>Verdana</option>
        </select>

        <label for="dimensione_caratteri">Dimensione caratteri:</label>
        <input type="number" id="dimensione_caratteri" name="dimensione_caratteri" value="<?php echo $_SESSION['dimensione_caratteri']; ?>">

        <button type="submit">Salva preferenze</button>
    </form>
</body>
</html>
