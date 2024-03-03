<!doctype html public "-//w3c//dtd html 4.0 transitional//en"> 
<html>
<head>
    <title>funzioni</title>
</head>
<body>
    <input type="text" name="nome" value="Valore predefinito"><br>
    
    <input type="password" name="password"><br>

    <input type="email" name="email" placeholder="email@example.com"><br>
    
    <input type="url" name="sito-web"><br>

    <input type="tel" name="telefono"><br>

    <input type="search" name="ricerca" placeholder="Cerca..."><br>

    <textarea name="commento" rows="4" cols="50">Inserisci il tuo commento qui</textarea><br>

    <input type="date" name="data"><br>

    <input type="radio" name="scelta" value="opzione1"> Opzione 1
    <input type="radio" name="scelta" value="opzione2"> Opzione 2<br>

    <!--checked per selezionare in default-->

    <input type="checkbox" name="interessi" value="musica"> Musica
    <input type="checkbox" name="interessi" value="sport"> Sport<br>

    <input type="file" name="carica-file" accept=".jpg, .jpeg, .png, image/*"><br>

    <input type="number" name="quantita" min="1" max="10" step="1"><br>

    <select name="città">
        <option value="NewYork">New York</option>
        <option value="LosAngeles">Los Angeles</option>
        <option value="Chicago">Chicago</option>
    </select><br>

    <input type="color" name="colore"><br>

    <input type="range" name="valore" min="0" max="100" step="1"><br>

    <input type="time" name="orario"><br>

    <input type="datetime-local" name="data-e-ora"><br>

    <input type="month" name="mese"><br>

    <input type="week" name="settimana"><br>

    <input type="image" src="immagine.png" alt="Immagine"><br>

    <input type="reset" value="Annulla"><br>

    <input type="submit" value="Invia"><br>

    <input type="hidden" name="campo-nascosto" value="valore-nascosto"><br>

</body>
</html>