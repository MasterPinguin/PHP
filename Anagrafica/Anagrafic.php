<?php
    $nome=$_GET["nome"];
    $cognome=$_GET["cognome"];
    $mail=$_GET["mail"];
    $commento=$_GET["commento"];
    $sesso=$_GET["sesso"];

    echo"Nome: ".$nome."<br>";
    echo"Cognome: ".$cognome."<br>";
    echo"Mail: ".$mail."<br>";
    echo"Commento: ".$commento."<br>";
    echo"Sesso: ".$sesso."<br>";

    echo"<h1> I valori inseriti nel modulo sono: </h1><br>";

    if($nome==""){
        echo"Ok non hai un nome";
        if($cognome==""){
            echo" ne un cognome<br>";
        }else{
            echo" ma almeno hai un cognome, che sarebbe ".$cognome."<br>";
        }
    }else{
        echo"Ti chiami ".$nome;
        if($cognome==""){
            echo", ma non hai un cognome<br>";
        }else{
            echo " ".$cognome."<br>";
        }
    }
    if($mail==""){
        echo"Ahahahah dinosauro non hai una mail<br>";
    }else{
        echo"la tua mail è ".$mail."<br>";
    }
    if($commento==""){
        echo"non hai lasciato alcun commento complimenti...<br>";
    }else{
        echo"Il tuo commento è stato :<br>".$commento."<br>";
    }
    if($sesso==""){
        echo"e non hai un sesso c'era l'opsione altro apposta per te...<br>";
    }else{
        if($sesso=="Tanto"){
            echo"BRAVO HAI MESSO LA RISPOSTA CORRETTA <br>biricchino<br>";
        }else{
            if($sesso=="Altro"){
                echo"AHAHHAHAHAHHAAH GAYYYYY<br>Che frocio XD<br>";
            }
            else{
                echo"E sei ".$sesso."<br>";
            }

        }
    }

    echo"<a href='/PHP/Anagrafica/Anagrafica.php'>Torna indietro alla pagina HTML</a>";

?>