<?php
$vettore = array();

for ($i = 0; $i < 6; $i++) {
    $numeroCasuale = rand(1, 100);
    $vettore[$i] = $numeroCasuale;
}

echo "Dati nel vettore: ";
foreach ($vettore as $elemento) {
    echo $elemento . ", ";
}
$max= array();
$min= array();
$j=0;
$y=0;
foreach ($vettore as $elemento) {
    if($elemento>=50){
        $max[$j]=$elemento;
        $j++;
    }else{
        $min[$y]=$elemento;
        $y++;
    }
}
$somMax=0;
$somMin=0;
echo "<br>Dati nel vettore max[]: ";
foreach ($max as $mx) {
    echo $mx . ", ";
    $somMax=$somMax+$mx;
}
echo "<br>Dati nel vettore min[]: ";
foreach ($min as $mn) {
    echo $mn . ", ";
    $somMin=$somMin+$mn;
}

if($somMax>=$somMin){
    echo "<br>La somma di valori maggiori è quella del vettore max[] con un valore di ".$somMax;
}else{
    echo "<br>La somma di valori maggiori è quella del vettore min[] con un valore di ".$somMin;
}


?>
