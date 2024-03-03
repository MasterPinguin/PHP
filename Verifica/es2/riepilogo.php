<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>riepilogo prodotti</title>
</head>
<body>
    <h1>Riepilogo prodotti</h1>
    <ul>
    <?php
        $max=0;
        $_SESSION['i']=0;
        for($i=0; $i<count($_SESSION['prodotto']); $i++){
            echo"<li> prodotto: <b>".$_SESSION['prodotto'][$i]['nome']."</b> - pezzi per prodotto: <b>".$_SESSION['prodotto'][$i]['pezzi']."</b></li><br>";
            if($_SESSION['prodotto'][$i]['pezzi']>$max){
                $max=$_SESSION['prodotto'][$i]['pezzi'];
                $_SESSION['i']=$i;
            }
        }
    ?>
    </ul>
    <p> il prodotto con la piu alta prenotazione di pezzi è <b><?= $_SESSION['prodotto'][$_SESSION['i']]['nome'] ?></b> con un punteggio di <b><?= $_SESSION['prodotto'][$_SESSION['i']]['pezzi'] ?></b> </p><br>
    <a href="index.php">inserisci altri prodotti</a><br>
    <a href="logout.php">azzera tutto</a>
</body>
</html>