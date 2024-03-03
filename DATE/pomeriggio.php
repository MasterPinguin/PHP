<!DOCTYPE html>
<html>
<head>
    <title>date</title>
</head>
<body>
<?php
    $ora=date('G');
    if($ora>=5 && $ora<=7){
        $mom="prima mattina";
    };
    if($ora>=8 && $ora<=11){
        $mom="mattina";
    };
    if($ora==12){
        $mom="mezzo giorno";
    };
    if($ora>=13 && $ora<=17){
        $mom="pomeriggio";
    };
    if($ora>=18 && $ora<=20){
        $mom="tardo pomeriggio";
    };
    if($ora>=21 && $ora<=22){
        $mom="sera";
    };
    if($ora==23){
        $mom="notte";
    };
    if($ora==0){
        $mom="mezza notte";
    };
    if($ora>=1 && $ora<=4){
        $mom="tarda notte";
    };
    echo "è ".$mom."<br>";
    echo"sono le ore".$ora."<br>";
?>
</body>
</html>