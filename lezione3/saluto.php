<?php
    session_start();

    $user = $_SESSION['user'];
    $comune = $_SESSION['comune']
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Ciao <?php echo $user ?> il comune scelto è <?php echo $comune ?></p>
</body>
</html>

<?php
    session_destroy(); //usare quando non servono più i dati, in questo caso dopo il saluto l'utente perde i dati
?>