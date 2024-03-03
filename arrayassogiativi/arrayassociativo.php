<?php
//creazione di un array assogiativo

$array=[
    'Nome'=>'Damiana',
    'Cognome'=>'Cella',
    'Eta'=>35,
    'Professione'=>'Insegnante'
];

//stampa l'array
print_r($array);

echo"<br><br>";

// stampa array con var_dump

var_dump($array);
echo"<br><br>";
// stampa array con foreach

foreach($array as $valore){
    echo $valore.", ";
}

echo"<br><br>";
// stampa array con foreach

foreach($array as $key=>$valore){
    echo $key." : ".$valore.", <br>";
}

//operazioni:

//ricerca 
if(in_array('Damiana',$array)){
    echo"il nome è presente nell'array <br>";
}
else{
    echo"il nome non è presente nell'array <br>";
}
echo"<br><br>";


asort($array); //funzione asort() in ordine crescente per valore
print_r($array);
echo"<br><br>";
arsort($array); //funzione asort() in ordine decrescente per valore
print_r($array);
echo"<br><br>";
ksort($array); //funzione asort() in ordine crescente per chiave
print_r($array);
echo"<br><br>";
krsort($array); //funzione asort() in ordine decrescente per chiave
print_r($array);
$c=count($array);
echo"<br>leng =".$c; // restituisce la lunghezza dell'array

?>