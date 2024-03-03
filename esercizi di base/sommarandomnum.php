<!DOCTYPE html>
<html>
<head>
    <title>Tabella con valori 1</title>
</head>
<body>
    <?php
        $Temp=0;
        $i = 1;
        while($i <= 10){
            $i++;
            $Temp=$Temp+rand(0,1000);
        }
        echo $Temp."<br>";
    ?>
</body>
</html>