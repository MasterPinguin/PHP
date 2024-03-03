<?php
    $n = $_GET["n"];

    if($n==""){
        echo "Inserisci un numero";
    }else{
        $primo = true;

        for ($i = 2; $i < $n ; $i++) {
            if ($n % $i == 0) {
                $primo = false;
                break;
            }
        }

        if ($primo) {
            echo "Il numero $n è un numero primo";
        } else {
            echo "Il numero $n non è un numero primo";
        }
    }
?>
