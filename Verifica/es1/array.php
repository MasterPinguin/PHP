<?php
    $array=array();
    $array[]=$_GET['elemento1'];
    $unico=true;
    echo"valori dell'array: ".$_GET['elemento1'].", ";
    for($i=2;$i<=10;$i++){
        echo $_GET['elemento'.$i];
        foreach($array as $elemento){
            if($elemento == $_GET['elemento'.$i]){
                $unico=false;
                break;
            }
        }
        if($unico){
            $array[]=$_GET['elemento'.$i];
        }
        $unico=true;
        if($i==10){echo";<br>";}
        else{echo", ";}
    }
    echo"valori stampati: ";
    foreach($array as $elemento){
        echo $elemento;
        if($i==count($array)){echo";";}
        else{echo", ";}
    }
?>
