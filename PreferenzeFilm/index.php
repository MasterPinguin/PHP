<!DOCTYPE html>
<html lang="it">
<head>
    <title>Film preferito</title>
</head>
<body>
<!-- Componente HTML -->
<h1> Valuta un film a tua scelta</h1>
<form method="POST" action="valutazione.php">
    <label for="titolo">Titolo:</label>
    <input type="text" id="titolo" name="titolo" required /><br>
    <label for="val">Valutazione:</label>
    ☹️<input type="range" id="val" name="val" min="1" max="5" step="1" required/>🙂<br>
    <input type="submit" name="Login" value="Login" />
</form>
</body>
</html>