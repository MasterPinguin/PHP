<?php
    $num_1=$_GET["num_1"];
    $num_2=$_GET["num_2"];
    $num_3=$_GET["num_3"];
    $x=0;
    
    if($num_1<$num_3 && $num_3<$num_2){
        echo"output: ";
        do{
            $x=$x+$num_3;
            $num_2=$num_2-$num_3;
            echo$x.", ";
        }while($num_3<$num_2);
    }else{
        echo"<h1> ERRORE 1004 L'UTENTE NON RIESCE A LEGGERE </h1><br>";
        echo"<a href='/PHP/Verifica/1verifica.php'>Riprovaci ma sta volta leggi bene cosa devi inserire</a>";
    }
?>