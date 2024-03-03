<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Prenotazione</title>
</head>
<body>
    <h1>Form Prenotazione</h1>
    <form method="get" action="prenotazioni.php">
        <label for="nome_evento">Nome dell'evento:</label>
        <input type="text" id="nome_evento" name="nome_evento" required>
        <br>
        <label for="numero_persone">Numero di persone:</label>
        <input type="number" id="numero_persone" name="numero_persone" required>
        <br>
        <input type="submit" value="Prenota">
    </form>
</body>
</html>
