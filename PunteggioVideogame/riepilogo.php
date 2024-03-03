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
    <h1>Riepilogo punteggi videogame</h1>
    <h2>Lista dei punteggi dei videogame</h2>
    <ul>
        <?php 
            for($i=0; $i+1<count($_SESSION['Vg']); $i++){
                echo "<li><b>".$_SESSION['Vg'][$i]['nome']."</b> con punteggi: ";
                print_r($_SESSION['Vg'][$i]['punt']);
                echo"</li>";
            }
        ?>
    </ul>
    <h2>Lista dei punteggi massimi dei videogame</h2>
    <ul>
        <?php 
            $max=0;
            $_SESSION['i']=0;
            for($i=0; $i+1<count($_SESSION['Vg']); $i++){
                echo "<li><b>".$_SESSION['Vg'][$i]['nome']."</b> - ".max($_SESSION['Vg'][$i]['punt']).";</li>";
                if(max($_SESSION['Vg'][$i]['punt'])>=$max){
                    $max=max($_SESSION['Vg'][$i]['punt']);
                    $_SESSION['i']=$i;
                }
            }
        ?>
    </ul>
    <p>Il videogame con il punteggio piu alto è: <b><?= $_SESSION['Vg'][$_SESSION['i']]['nome']?></b> con un punteggio di <?= max($_SESSION['Vg'][$_SESSION['i']]['punt'])?></p>
    <br><a href='index.php'>FAI UN ULTERIORE VALUTAZIONE</a>"
    <br><a href='logout.php'>AZZERA LE VALUTAZIONI</a>"
</body>
</html>