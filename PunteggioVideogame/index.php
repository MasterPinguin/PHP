<!DOCTYPE html>
<html lang="it">
<head>
    <title>Videogame</title>
</head>
<body>
<!-- Componente HTML -->
<h1> Inserisci i dati del videogame</h1>
<form method="POST" action="raccolta.php">
    <label for="nome">Nome videogame:</label>
    <input type="text" id="nome" name="nome" required /><br>
    <label for="punt">Punteggio:</label>
    <input type="number" id="punt" name="punt" step="1" required/><br>
    <input type="submit" name="Login" value="Login" />
</form>
</body>
</html>