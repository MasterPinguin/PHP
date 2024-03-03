<?php
    $n1=$_GET["n1"];
    $n2=$_GET["n2"];
    $op=$_GET["op"];
    $x=0;

    if($op==""){
        echo "non hai inserito l'operatore che ti aspetti che prenda iniziative da solo è una scelta che devi fare tu riguarda te non me.";
    }else{
        if($op=="+"){
            $x=$n1+$n2;
        }else{
            $x=$n1-$n2;
        }
        echo$n1.$op.$n2."=".$x;
    }

?>