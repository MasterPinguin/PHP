<?php
    session_start();

    $nome=$_GET['nome'];
    $pezzi=$_GET['pezzi'];

    $nonesiste=true;
    foreach ($_SESSION['prodotto'] as $prodotto) {
        if($prodotto['nome']==$nome){
            $prodotto['pezzi']=$pezzi;
            $nonesiste=false;
            break;
        }
    }

    if($nonesiste){
        $prodotto=[
            'nome'=> $nome,
            'pezzi'=> (int)$pezzi
        ];
        $_SESSION['prodotto'][]=$prodotto;
    }
    header("Location: ./riepilogo.php");
?>
