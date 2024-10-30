<?php
    $colore_testo = "verde";
    $lettera = "o";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .rosso{
            color: #f00;
        }
        
        .verde{
            color: #0f0;
        }
    </style>
</head>
<body>
    <p class="<?php echo $colore_testo ?>">ciao a tutt<?php $lettera?></p>
</body>
</html>