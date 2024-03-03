<!DOCTYPE html>
<html>
<head>
    <title>date</title>
    <style>
        body {
            background-color: yellow;
            margin: 0; 
            padding: 0; 
            font-size: 30px;
            text-align: center;
        }
        .red-text {
            color: red;
        }
    </style>
</head>
<body>
<?php
    $ora=date('G');
    echo "<p class='red-text' >Sono le ore: ".$ora." </p> <br>";
?>
</body>
</html>