<!DOCTYPE html>
<html>
<head>
    <title>date</title>
    <style>
        body {
            margin: 0; 
            padding: 0; 
        }
        .divblu {
            background-color: blue;
            flex: 1;
            padding: 10px;
            padding-bottom: 700px; 
        }
        .divred {
            background-color: red;
            flex: 1;
            padding: 10px;
            padding-bottom: 700px; 
        }
    </style>
</head>
<body>
<?php
    $ora=date('G');
    if($ora>=8 && $ora<=15){
        echo "<div class='divred'> red </div>";
    }else{
        echo "<div class='divblu'> blue </div>";
    }
?>
</body>
</html>