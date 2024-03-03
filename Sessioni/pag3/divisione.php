<?php
session_start();

echo"
<!DOCTYPE html>
<html lang='it'>
<head>
    <title>Risultato divisione</title>
</head>
<body>
    <h1>Risultato divisione</h1>
    <p>Il risultato della divisione è: ".$_SESSION['risultato']." </p>
</body>
</html>";
?>