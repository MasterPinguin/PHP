<?php
session_start();

echo"
<!DOCTYPE html>
<html lang='it'>
<head>
    <title>Risultato somma</title>
</head>
<body>
    <h1>Risultato somma</h1>
    <p>Il risultato della somma è: ".$_SESSION['risultato']." </p>
</body>
</html>";
?>