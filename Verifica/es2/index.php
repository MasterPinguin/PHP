<!DOCTYPE html>
<html lang="en">
<head>
    <title>acquisto prodotti</title>
</head>
<body>
    <h1>Inserisci i dati richiesti</h1>
    <form method="GET" action="raccolta.php">
        <label for='nome'>inserisci il nome del prodotto:</label><br>
        <input type='text' id='nome' name='nome' required><br>
        <label for='pezzi'>inserisci i pezzi del prodotto:</label><br>
        <input type='number' id='pezzi' name='pezzi' min='1' step='1' required><br>
        <label for='submit'>invia il modulo:</label><br>
        <input type="submit" name="Login" value="Login"><br>
    </form>
</body>
</html>
