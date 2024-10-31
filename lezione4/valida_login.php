<?php
    //apro la sessione
    session_start();

    //inizializzo le variabili
    $user = $_POST['user'];
    $pwd = $_POST['pwd'];

    //file di config
    include("./include/config.php");

    //collego al db
    $link = new mysqli($dbhost, $dbuser, $dbpassword, $dbname);

    if($link == false) {
        die();
    }

    //istruzione sql per la select
    $sql_select = "SELECT * FROM alunni WHERE user = '$user' ";

    $result = $link->query($sql_select); // -> vuol dire assegnare, in questo caso a link si assegna la query. (è come scrivere link.query su js)

    $row = $result->fetch_assoc(); //estrae il dato da result, tutta la stringa e la passa a row, row è un array e va nel foreach. (assoc sta per associativo)

    //controllo password
    if($result->num_rows == 1 ) {
        $check_password = password_verify($pwd, $row['pwd']); //controlla se al password che l'utente scrive corrisponde alla criptazione fatta.
        if($check_password) {
            $_SESSION['utente'] = $row;
            header("Location: utente.php");
            
            //echo "utente collegato";
        } else {
            echo "password errata";
        }
    } else {
        echo "user errata";
    }








   /*  foreach($row as $indice => $valore) { //stampa dell'indice che sta nel campo e del valore che sta nel database.
        echo "<p>$indice</p>";
        echo "<p>$valore</p>";
    } */

/* echo $row['pwd']; //mostra solo la pwd criptata. */


?>