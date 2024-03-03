<!DOCTYPE html>
<html>
<head>
    <title>Tabella con valori 1</title>
</head>
<body>
    <table border="1">
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= 10; $j++) {
                echo "<td>".rand(0,1000)."</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
