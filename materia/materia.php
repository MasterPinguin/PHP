<html>
<head>
    <title>Esempio POST</title>
</head>
<body>
    <form method="post" action="materi.php">
        Nome: <input type="text" id="nome" name="nome" placeholder="Scrivi il tuo nome" /><br>
        Cognome: <input type="text" id="cognome" name="cognome" placeholder="Scrivi il tuo cognome" /><br>
        Materie: 
        <select name="materie">
			<option value="informatica">informatica</option>
			<option value="sistemi e reti">sistemi e reti</option>
            <option value="tipsit">tipsit</option>
		</select><br>
        <input type="submit" value="INVIO" />
        <input type="reset" value="AZZERA" /><br>
    </form>
</body>
</html> 