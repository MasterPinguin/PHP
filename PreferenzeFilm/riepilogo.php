<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riepilogo</title>
</head>
<body>
    <h1>Riepilogo valutazioni ilbri</h1>
    <h2>Lista delle valutazioni massime dei ilbri</h2>
    <ul>
        <?php 
            for($i=0; $i+1<count($_SESSION['libri']); $i++){
                echo "<li>".$_SESSION['libri'][$i]['titolo']." - ".max($_SESSION['libri'][$i]['val']).";</li>";
            }
        ?>
    </ul>
    <h2>Lista delle valutazioni medie dei ilbri</h2>
    <ul>
        <?php
            $max=0;
            $_SESSION['i']=0;
            for($i=0; $i+1<count($_SESSION['libri']); $i++){
                echo "<li>".$_SESSION['libri'][$i]['titolo']." - ";
                $val=(array_sum($_SESSION['libri'][$i]['val'])/count($_SESSION['libri'][$i]['val'])); 
                echo $val.";</li>";
                if($val>=$max){
                    $max=$val;
                    $_SESSION['i']=$i;
                    if($max==5){break;}
                }
            }
        ?>
    </ul>
    <p>Il libro con le valutazioni piu alte è: <?= $_SESSION['libri'][$_SESSION['i']]['titolo']?> con un punteggio di <?= (array_sum($_SESSION['libri'][$_SESSION['i']]['val'])/count($_SESSION['libri'][$_SESSION['i']]['val']))?></p>
    <br><a href='index.php'>FAI UN ULTERIORE VALUTAZIONE</a>
    <br><a href='logout.php'>AZZERA LE VALUTAZIONI</a>
</body>
</html>