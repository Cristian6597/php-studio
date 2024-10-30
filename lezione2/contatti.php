<?php
    session_start();
    $utente = $_SESSION["nome"];
    $utente_cognome = $_SESSION["cognome"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="controllo.php" method="post">
            <input type="text" placeholder="nome" name="nome" value="<?php echo $utente ?>">
            <input type="text" placeholder="cognome" name="cognome" value="<?php echo $utente_cognome ?>">
            <button type="submit">controlla</button>
        </form>
    </div>
</body>
</html>