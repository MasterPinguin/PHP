<html>
<head>
    <title>Esempio GET</title>
</head>
<body>
    <form method="GET" action="Anagrafic.php">
        Nome: <input type="text" id="nome" name="nome" placeholder="Scrivi il tuo nome" /><br>
        Cognome: <input type="text" id="cognome" name="cognome" placeholder="Scrivi il tuo cognome" /><br>
        email: <input type="email" id="mail" name="mail" placeholder="Scrivi la tua mail" /><br>
        Commento: <br>
        <textarea id="commento" name="commento" placeholder="Scrivi il tuo commento" rows="4" cols="50"></textarea><br>
        Sesso:
        <input type="radio" id="M" name="sesso" value="Maschio" >Maschio 
        <input type="radio" id="F" name="sesso" value="Femmina" >Femmina 
        <input type="radio" id="A" name="sesso" value="Altro" >Altro 
        <input type="radio" id="T" name="sesso" value="Tanto" >Tanto <br>
        <input type="submit" value="INVIO" />
        <input type="reset" value="AZZERA" /><br>
    </form>
</body>
</html>