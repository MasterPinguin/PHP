<!DOCTYPE html>
<html>
<head>
    <title>Bitnami: Open Source. Simplified</title>
    <style>
        body {
            background-color: yellow;
            margin: 0; 
            padding: 0; 
            font-size: 24px;
            text-align: center;
        }
        .red-text {
            color: red;
        }
    </style>
</head>
<body>
<?php
    echo "<p class='red-text' id='orario' ></p>";
?>
</body>
<script>
    function updateOrario() {
        var data = new Date();
        var ore = data.getHours();
        var minuti = data.getMinutes();
        var secondi = data.getSeconds();
        // var secondo = data.getSeconds();
        if(ore<10){ore='0'+ore}
        if(minuti<10){minuti='0'+minuti}
        if(secondi<10){secondi='0'+secondi}
        var orario = "Sono le ore: " + ore + ":" + minuti + ":" + secondi;
        document.getElementById("orario").innerHTML = orario;
      }

    setInterval(updateOrario, 1000);
</script>
</html>
