<?php
// Creare un vettore di 10 elementi di tipo int
$vettore = array();

for ($i = 0; $i < 10; $i++) {
    // Generare un numero casuale e inserirlo nel vettore
    $numeroCasuale = rand(1, 100); // Modificare il range a seconda delle esigenze
    $vettore[$i] = $numeroCasuale;
}

// Visualizzare i dati memorizzati nel vettore
echo "Dati nel vettore: ";
foreach ($vettore as $elemento) {
    echo $elemento . ", ";
}

?>
