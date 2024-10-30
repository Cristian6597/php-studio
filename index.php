<?php

$testo_utente =  "cristian"; //non si usa il camel case, si usa _

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // echo funziona come print

        echo "<p class=pluto>hello world!!</p>";
        echo "Ciao $testo_utente"; 
        // sintassi alternativa echo "Ciao " . $testo ( il punto concatena )
        echo '$testo_utente' // gli apici singoli manda in stampa come sta scritto
    ?>
    <p class="pluto"></p>
</body>
</html>