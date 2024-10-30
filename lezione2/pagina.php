<?php 
    session_start(); //le session salvano nella cache
    $utente = $_SESSION["nome"];
    $utente_cognome = $_SESSION["cognome"];
    //echo "ciao $utente";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina</title>
</head>
<body>
    <p>evviva <?php echo "$utente $utente_cognome" ?></p>
</body>
</html>

<?php
session_destroy();
?>