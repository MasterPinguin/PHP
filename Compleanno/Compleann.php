<?php
    $nome=$_GET["nome"];
    $cognome=$_GET["cognome"];
    $data=substr($_GET["data"], 5);

    $mese=date('m');
    $d=date('d');
    $oggi=$mese."-".$d;

    if($data==$oggi){
        echo"Auguri oggi è il tuo compleanno<br>immagina che sfiga stare a guardare questo codice il giorno del propio compleanno hahahah";
    }else{
        echo"Non è il tuo compleanno";
    }
?>