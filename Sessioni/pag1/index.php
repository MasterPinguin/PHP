<!DOCTYPE html>
<html lang="it">
<head>
    <title>Login al sito</title>
</head>
<body>
<!-- Componente HTML -->
<h1> Login al sito</h1>
<form method="POST" action="index.php">
    <label for="username"> Username </label>
    <input type="text" id="username" name="username" placeholder="Scrivi il tuo username" /><br>
    <label for="password"> Password </label>
    <input type="password" id="password" name="password" placeholder="Scrivi la tua password" /><br>
    <input type="submit" name="Login" value="Login" />
</form>
</body>
</html>

<?php
    // PHP
    // Array username e array password
    $username = ["user"];
    $password = ["password"];

    //Ricezione dei dati da form post
    $userform = $_POST["username"];
    $passform = $_POST["password"];
    //Apertura sessione
    session_start();
    //Controllo
    for($i=0; $i<count($username); $i++){
        if($username[$i]==$userform && $password[$i]==$passform){
            $_SESSION["username"] = $username[$i];
            header('Location: ./pagina.php');
        }
    }
    if (isset($_POST['Login'])) {
        if(!in_array($userform,$username)){
            echo "username inesistente!!";
        }else{
            echo "password errata!!";
        }
    }
?> 