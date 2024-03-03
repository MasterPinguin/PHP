<html>
<head>
    <title>Esercizio 3</title>
</head>
<body>
    <form method="GET" action="palestra.php">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" placeholder="Scrivi il tuo nome" /><br>
        <label for="eta">Età:</label><br>
        <input type="number" id="eta" name="eta" placeholder="inserisci la tua età" max="150"/><br>
        <label for="frequenza">Frequenza di pagamento:</label><br>
        <select name="frequenza" id="frequenza">
            <option value="Mensile">Mensile</option>
            <option value="Bimestrale">Bimestrale</option>
            <option value="Trimestrale">Trimestrale</option>
            <option value="Annuale">Annuale</option>
        </select><br><br>
        <input type="submit" value="INVIO" />
        <input type="reset" value="AZZERA" /><br>
    </form>
</body>
</html>