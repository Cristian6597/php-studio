<?php
    session_start(); //serve per spostare i dati da una pagina all'altra

    // $user = $_SESSION['user'];
    // if(isset($_SESSION['user'])) { //cercare spiegazione più accurata di isset, serve a vedere se una variabile è definita o meno
    //     $user = $_SESSION['user'];
    // }
    // else {
    //     $user = "";
    // }

    $user = isset($_SESSION['user']) ? $_SESSION['user'] : ""; // questo metodo di scrittura si chiama ternario
    $comuneuser = isset($_SESSION['comune']) ? $_SESSION['comune'] : "";
    $giornouser = isset($_SESSION['giorno']) ? $_SESSION['giorno'] : "";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <form action="valida.php" method="post">
        <input type="text" name="user" value="<?php echo $user ?>">
        <select name="comune">
            <option value="0" selected>comune</option>
            <?php
                $comune = ["aaa","bbb","ccc"];
                foreach($comune as $valore){ //funzione che è in grado di stampare ogni valore di un array, primo parametro è l'array, poi "as", poi variabile dove vanno passati i valori
                    if($comuneuser == $valore) {
                        echo "<option value='$valore' selected>$valore</option>";

                    }
                    else{
                        echo "<option value='$valore'>$valore</option>";
                    }
                }
                // foreach($comune as $valore){ 
                //     if($valore !="bbb"){
                //         echo "<option>$valore</option>"; //se la condizione è diversa da bbb stampala sennò non stampare. (per stampare si intende mostrare in pagina)

                //     }
                // }
            ?>

        </select>

        <select name="giorno">
            <option value="0">giorno</option>
            <?php
                $giorno = ["lu" => "lunedì","ma" => "martedì","me" => "mercoledì","gio" => "giovedì","ve" => "venerdì","sab" => "sabato","dom" => "domenica"]; // indice => valore
                //echo "<option>$giorno[lu]</option>";
                foreach($giorno as $indice => $valore) { //in questo caso stiamo passando sia l'indice che il valore dell'array
                    echo "<option value='$indice'>$valore</option>";

                }
                $giorno = $_SESSION['giorno'];
            ?>

        </select>

        <button type="submit">valida</button>
    </form>
</body>
</html>