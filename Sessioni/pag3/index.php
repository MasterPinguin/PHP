<!DOCTYPE html>
<html lang="it">
<head>
    <title>Calcolatrice</title>
</head>
<body>
    <h1>Calcolatrice</h1>
    <form method="POST" action="index.php">
        <label for="num1">Numero 1:</label>
        <input type="number" id="num1" name="num1" required /><br>

        <label for="num2">Numero 2:</label>
        <input type="number" id="num2" name="num2" required /><br>

        <input type="submit" name="somma" value="Somma" />
        <input type="submit" name="sottrazione" value="Sottrazione" />
        <input type="submit" name="moltiplicazione" value="Moltiplicazione" />
        <input type="submit" name="divisione" value="Divisione" />
    </form>
</body>
</html>
<?php
    session_start();

    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];

    if (isset($_POST["somma"])) {
        $_SESSION["risultato"] = $num1 + $num2;
        header("Location: somma.php");
    } elseif (isset($_POST["sottrazione"])) {
        $_SESSION["risultato"] = $num1 - $num2;
        header("Location: sottrazione.php");
    } elseif (isset($_POST["moltiplicazione"])) {
        $_SESSION["risultato"] = $num1 * $num2;
        header("Location: moltiplicazione.php");
    } elseif (isset($_POST["divisione"])) {
        if ($num2 != 0) {
            $_SESSION["risultato"] = $num1 / $num2;
            header("Location: divisione.php");
        } else {
            $_SESSION["errore"] = "Impossibile dividere per zero";
            header("Location: index.php");
        }
    }
?>
