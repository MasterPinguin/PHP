<?php
    $nome=$_GET["nome"];
    $eta=$_GET["eta"];
    $frequenza=$_GET["frequenza"];
    
    if(18<$eta && $eta<64){
        $prezzo=45;
    }else{
        $prezzo=35;
    }

    $prc=0;

    if($frequenza=="Bimestrale"){
        $prc=10;
    }elseif($frequenza=="Trimestrale"){
        $prc=15;
    }elseif($frequenza=="Annuale"){
        $prc=20;
    }
    $prezzoannuo=($prezzo-(($prezzo/100)*$prc))*12;

    echo"<table border='1'>
            <tr>
                <td colspan='3'> Dati inseriti nel form </td>
                <td> Output prodotto dal server </td>
            </tr>
            <tr>
                <td> Nome </td>
                <td> Età </td>
                <td> Pagamento </td>
                <td> Output </td>
            </tr>
            <tr>
                <td> $nome </td>
                <td> $eta </td>
                <td> $frequenza </td>
                <td> Il prezzo per un anno è di $prezzoannuo </td>
            </tr>
        </table>";

?>