<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registra</title>
</head>
<body>
    <div>
        <form action="./valida_registra.php" method="post">
            <input type="text" placeholder="cognome" name="cognome">
            <input type="text" placeholder="nome" name="nome">
            <input type="text" placeholder="user" name="user">
            <input type="password" placeholder="password" name="pwd">
            <input type="radio" name="genere" value="d" id="donna">
            <label for="donna">donna</label>
            <input type="radio" name="genere" value="u" id="uomo">
            <label for="uomo">uomo</label>
            <input type="date" name="data_nascita">
            <input type="checkbox" name="rosso" value="si" id="rosso">
            <label for="rosso">rosso</label>
            <input type="checkbox" name="verde" value="si" id="verde">
            <label for="verde">verde</label>
            <input type="checkbox" name="giallo" value="si" id="giallo">
            <label for="giallo">giallo</label>
            <select name="comune">
                <option value="comune1">comune 1</option>
                <option value="comune2">comune 2</option>
                <option value="comune3">comune 3</option>
                <option value="comune4">comune 4</option>
            </select>
            <button type="submit">registra dati</button>
        </form>
    </div>
</body>
</html>