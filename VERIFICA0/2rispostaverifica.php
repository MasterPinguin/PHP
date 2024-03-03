<?php
    $a=$_GET["a"];
    $b=$_GET["b"];
    $c=$_GET["c"];

    if($a==0){
        echo"Complimenti io ti ho chiesto un equazione di secondo grado e sei riuscito a trasformarla in una di primo grado...<br>";
        $x=(-1*$c)/$b;
        echo"Comunque la x=".$x."<br>";
    }else{
        $delta=($b*$b)-4*$a*$c;
        if($delta>0){
            $x1=((-1*$b)+sqrt($delta))/2*$a;
            $x2=((-1*$b)-sqrt($delta))/2*$a;
            echo"Il delta è maggiore di 0 quindi i risultati sono 2:<br>x1=".$x1."<br>x2=".$x2."<br>";
        }else if($delta==0){
            $x=(-1*$b)/2*$a;
            echo"Il delta è uguale a 0 quindi il risultato è:<br>x=".$x."<br>";
        }else{
            echo"Il delta è minore di 0 quindi il risultato non esiste <br>";
        }
    }
    echo"<br><a href='/PHP/Verifica/2verifica.php'>per tornare alla pagia precedente</a>";
?>