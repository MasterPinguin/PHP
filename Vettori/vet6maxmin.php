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
$max=$vettore[0];
$min=$vettore[0];
echo "Dati nel vettore: ";
foreach ($vettore as $elemento) {
    if($elemento>$max){
        $max=$elemento;
    }
    if($elemento<$min){
        $min=$elemento;
    }
}

echo "<br>Il valore massimo è ".$max.", mentre il valore minimo è ".$min;

?>
