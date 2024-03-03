<html>
<head>
    <title>Esempio GET</title>
</head>
<body>
<form method="GET">
    <input type="text" id="nome" name="nome" placeholder="Scrivi nome" /><br>
    <input type="text" id="cognome" name="cognome" placeholder="Scrivi cognome" /><br>
    <input type="submit" value="INVIO" />
    <input type="reset" value="AZZERA" /><br>
</form>
<?php
$nome=$_GET["nome"];
$cognome=$_GET["cognome"];

echo"Il tuo nome è: ".$nome."<br>";
echo"Il tuo cognome è: ".$cognome."<br>";
?>
</body>
</html>