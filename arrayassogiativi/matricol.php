<?php
    $n = $_GET["n"];
    $studenti = [];

    for ($i = 1; $i <= $n; $i++) {
        $studenti[$_GET['Matricola'.$i]] = $_GET['Nome'.$i];
    }
    echo "<form method='GET'>
            <label for='Stu'>CERCA LO STUDENTE</label><br>
            <input type='search' id='Stu' name='Stu' placeholder='cerca'/>
            <input type='submit' value='Cerca'/>
            <input type='hidden' name='n' value='$n'/>";
            $i = 1;
            foreach($studenti as $m => $n){
                echo "
            <input type='hidden' id='Studente$i' name='Matricola$i' value='$m'/>
            <input type='hidden' id='Studente$i' name='Nome$i' value='$n'/>";
                $i++;
            }
    echo "</form>";

    if (isset($_GET['Stu'])) {
        $studenteDaCercare = $_GET["Stu"];
        $matricola = array_search($studenteDaCercare, $studenti);

        if ($matricola !== false) {
            echo "Lo studente $studenteDaCercare ha la matricola $matricola.";
        } else {
            echo "Lo studente $studenteDaCercare non è stato trovato.";
        }
    }
?>