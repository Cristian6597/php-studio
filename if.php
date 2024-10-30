<?php
    $nome = "pippo";
    if($nome == "pippo") {
        $risposta = "utente loggato";
    }
    else{
        $risposta = "utente non loggato";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?php // echo $risposta ?></p>
    <p><?php echo "ciao $nome tu $risposta" ?></p>
    
</body>
</html>