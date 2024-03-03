<!DOCTYPE html>
<html>
<head>
    <title>date</title>
</head>
<body>
<?php
    echo "La funzione date<br>";
    $giorno=date('l');//l per il giorno della settimana
    echo "oggi è: ".$giorno."<br>";
    $ora=date('G:i');//G per ore l'ora i per i minuti
    echo"sono le ".$ora."<br>";
    $mese=date('F'); //n per il numero del mese
    echo "siamo a: ".$mese."<br>";
?>
</body>
</html>