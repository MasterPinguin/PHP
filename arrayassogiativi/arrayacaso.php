<html>
<head>
    <title>array</title>
</head>
<body>
    <form method='POST' action="arrayacaso.php">
        <label for='n'>inserisci il numero di elementi che deve contenere l'array:</label><br>
        <input type='number' id='n' name='Num' placeholder='numero'/><br>
        <input type='submit' value='INVIO' />
    </form>
</body>
</html>


<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $N = $_POST['Num'];
        $array1=array();
        $array2=array();
        for($i=0;$i<$N;$i++){
            $array1[$i]=rand(1, 10); 
        }
        for($i=0;$i<$N;$i++){
            $array2[$i]=rand(1, 10); 
        }
        echo"le celle di posizione uguali:<br> <ol> ";
        for($i=0;$i<$N;$i++){
            if($array2[$i]==$array1[$i]){
                echo"<li> le celle di posizione $i sono uguali con un valore di ".$array1[$i]."</li><br>";
            }
        }
        echo"</ol>";
    }
?>