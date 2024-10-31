<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registra</title>
</head>
<body>
    <div>
        <form action="./valida.php" method = "POST">
            <input type="text" placeholder="nome" name="nome">
            <input type="text" placeholder="password" name="password">
            <input type="email" placeholder="email" name="email">
            <input type="date" nome="data_nascita">
            <select name="provincia">
                <option value="Teramo">Teramo</option>
                <option value="Chieti">Chieti</option>
                <option value="Pescara">Pescara</option>
            </select>
            <button type="submit">registra</button>
        </form>
    </div>
</body>
</html>