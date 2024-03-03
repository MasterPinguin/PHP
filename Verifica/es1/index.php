<!DOCTYPE html>
<html lang="en">
<head>
    <title>10 numeri</title>
</head>
<body>
    <h1>Inserisci i 10 elementi</h1>
    <form method="GET" action="array.php">
        <?php
        for($i=1;$i<=10;$i++){
            echo "<label for='elemento$i'>inserisci il valore del $i elemento:</label><br>
            <input type='number' id='elemento$i' name='elemento$i' step='1' required><br>";
        }
        ?>
        <label for='submit'>invia il modulo:</label><br>
        <input type="submit" name="submit" id="submit" value="submit"><br>
    </form>
</body>
</html>
