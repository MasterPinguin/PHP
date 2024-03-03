<?php
    $ora=$_GET["ora"];
    $oravera=date('G');
    if($ora==$oravera){
        echo"<h1> Bravo sei riuscito a indovinare che ore sono senza sbirciare VERO!!! </h1><br>";
    }else{
        echo"<h1> Non hai indovinato come si fa a essere cosí scemi ti bastava sbirciare </h1><br>";
    }
?>