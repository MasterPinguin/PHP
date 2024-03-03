<!DOCTYPE html>
<html>
<head>
    <title>date</title>
    <style>
        body {
            background-color: #F3A433;
            margin: 0; 
            padding: 0; 
            font-size: 30px;
            text-align: left;
        }
        .yellow-text {
            font-family: Verdana, sans-serif;
            color: #FDF731;
            padding-left: 40px; 
        }
    </style>
</head>
<body>
<?php
    $mese=date('n');    //m se 04 o 09
    echo "<p class='yellow-text'> Siamo nel mese: ".$mese."</p>";
    $d=date('d');
    if($mese>=3 && $mese<=6){
        if($mese==3 && $d>=21){
            $stagione="Primavera";
        };
        if($mese==6 && $d<=20){
            $stagione="Primavera";
        };
    };
    if($mese>=6 && $mese<=9){
        if($mese==6 && $d>=21){
            $stagione="Estete";
        };
        if($mese==9 && $d<=22){
            $stagione="Estete";
        };
    };
    if($mese>=9 && $mese<=12){
        if($mese==9 && $d>=23){
            $stagione="Autunno";
        };
        if($mese==12 && $d<=21){
            $stagione="Autunno";
        };
    };
    if($mese>=1 && $mese<=3 || $mese==12){
        if($mese==12 && $d>=22){
            $stagione="Inverno";
        };
        if($mese==3 && $d<=20){
            $stagione="Inverno";
        };
    };
    echo "<p class='yellow-text' >".$stagione."</p>";
?>
</body>
</html>