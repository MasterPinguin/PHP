<?php
    $auto=['Fiat','Mercedes','Audi','ferrari'];
    //$auto=array('Fiat','Mercedes','Audi','ferrari');
    echo $auto[1]."<br>";
    echo "elemento corrente".current($auto).", ".key($auto)."<br>";
    next($auto);
    echo "elemento corrente".current($auto).", ".key($auto)."<br>";
    prev($auto);
    echo "elemento corrente".current($auto).", ".key($auto)."<br>";
    reset($auto);
    echo "elemento corrente".current($auto).", ".key($auto)."<br>";
    end($auto);
    echo "elemento corrente".current($auto).", ".key($auto)."<br>";

    //$auto[10]='BMV'
    echo "<br>";

    print_r($auto);
    echo "<br>";
    echo "<br>";
    var_dump($auto);
    echo "<br>";
    echo "<br>";
    for($i=0; $i<5; $i++){
        echo $auto[$i]."<br>";
    }
    foreach($auto as $valore){
        echo $valore."<br>";
    }
?>
