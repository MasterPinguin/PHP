<?php
$vettore = array();

for ($i = 0; $i < 7; $i++) {
    $numeroCasuale = rand(1, 100);
    $vettore[$i] = $numeroCasuale;
}

echo "Dati nel vettore: ";
foreach ($vettore as $elemento) {
    echo $elemento . ", ";
}
$prod=1;
$som=0;
for ($i = 0; $i < 7; $i++) {
    if($i%2==0){
        $prod=$prod*$vettore[$i];
    }else{
        $som=$som+$vettore[$i];
    }
}

echo "<br>Il prodotto dei componenti di posto pari è ".$prod.", mentre la somma dei componenti di posto dispari è ".$som;

?>
