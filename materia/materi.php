<?php
    $nome=$_POST["nome"];
    $cognome=$_POST["cognome"];
    $materie=$_POST["materie"];

    if($nome==""){
        echo"La materia preferita da sto tizio che non ha un nome ";
        if($cognome==""){
            echo"nè un cognome è ";
        }else{
            echo" ma almeno ha un cognome, che sarebbe $cognome è ";
        }
    }else{
        echo"La materia preferita da $nome ";
        if($cognome==""){
            echo", che non ha cognome, ma questi sono dettagli è ";
        }else{
            echo "$cognome è ";
        }
    }
    if($materie==""){
        echo"bhe in realtà non ha una materia preferita forse è uno di quelli che pensa che la ricreazione sia una materia<br>";
    }else{
        echo"$materie<br>";
    }

?>