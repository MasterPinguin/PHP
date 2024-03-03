<html>
<head>
    <title>tabelline</title>
</head>
<body>
<?php

    function tab(){
        for($j=0;$j<10;$j++){
            echo"<h1> tabellina del ".$j."</h1>";
            echo "<p>";
            for($i=0;$i<10;$i++){
                $x=$i*$j;
                echo "$j x $i = $x <br>";
            }
            echo "</p>";
        }
    }  

    tab();
?>
</body>
</html>