<?php
$vettore = array();

for ($i = 0; $i < 10; $i++) {
    $numeroCasuale = rand(1, 100);
    $vettore[$i] = $numeroCasuale;
}

echo "Dati nel vettore: ";
foreach ($vettore as $elemento) {
    echo $elemento . ", ";
}
// Visualizzare i dati memorizzati nel vettore al contrario
echo "<br> Dati nel vettore: ";
for ($i = 9; $i >= 0; $i--) {
    echo $vettore[$i] . ", ";
}

?>
