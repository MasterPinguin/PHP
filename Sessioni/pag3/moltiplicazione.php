<?php
session_start();

echo"
<!DOCTYPE html>
<html lang='it'>
<head>
    <title>Risultato moltiplicazione</title>
</head>
<body>
    <h1>Risultato moltiplicazione</h1>
    <p>Il risultato della moltiplicazione è: ".$_SESSION['risultato']." </p>
</body>
</html>";
?>