<?php
session_start();

echo"
<!DOCTYPE html>
<html lang='it'>
<head>
    <title>Risultato sottrazione</title>
</head>
<body>
    <h1>Risultato sottrazione</h1>
    <p>Il risultato della sottrazione è: ".$_SESSION['risultato']." </p>
</body>
</html>";
?>