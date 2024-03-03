<?php
$alunno=[
    'Matematica'=>$_GET["Matematica"],
    'Informatica'=>$_GET["Informatica"],
    'Italiano'=>$_GET["Italiano"],
    'Storia'=>$_GET["Storia"],
    'Inglese'=>$_GET["Inglese"],
    'Sistemi_e_reti'=>$_GET["Sistemi_e_reti"],
    'TIPSIT'=>$_GET["TIPSIT"],
    'GPO'=>$_GET["GPO"],
];

$media=0;
foreach($alunno as $valore){
    $media=$media+$valore;
}

$media=$media/count($alunno);

echo"<br><br> <h1>LA MEDIA È DI $media </h1>";
?>