<?php
$prodotti=[
    'Pane'=>$_GET["Pane"],
    'Acqua'=>$_GET["Acqua"],
    'Pizza'=>$_GET["Pizza"],
    'Patatine'=>$_GET["Patatine"],
    'CocaCola'=>$_GET["CocaCola"],
    'Pasta'=>$_GET["Pasta"],
    'Pomodoro'=>$_GET["Pomodoro"],
    'Mele'=>$_GET["Mele"],
    'Gelato'=>$_GET["Gelato"],
    'Cioccolato'=>$_GET["Cioccolato"],
];

$x=false;
foreach($prodotti as $prezzo){
    if($prezzo>=50){
        $x=true;
    }
}
if($x){
    echo"<br><h1>LISTA DEI PRODOTTI CON PREZZO SUPERIORE AI 50€ </h1>";
}else{
    echo"<br><h1>NELLA LISTA NON CI SONO PRODOTTI CON PREZZO SUPERIORE AI 50€ </h1>";
}
foreach($prodotti as $prod=>$prezzo){
    if($prezzo>=50){
        echo"<br>$prod:$prezzo"."€";
    }
}
?>