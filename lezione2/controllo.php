<?php
    session_start();

    $nome_user = $_POST["nome"]; //il nome all' interno dell array si chiama indice, il nome riprende il form da contatti e deve essere uguale a quello scritto in name=""
    $cognome_user = $_POST['cognome'];

    $nome_pattern = "/^[a-zA-Z][a-zA-Z]*[a-zA-Z]$/"; //(linguaggio regex (regular expression))validazione campo solo lettere, * serve per indicare un numero indefinito, in questo caso la prima lettere viene validata,
    //il corpo centrale e la parte finale della parola anche, il $ in questo caso indica lo stop.

    $nome_check = preg_match($nome_pattern, $nome_user);
    $_SESSION["nome"] = $nome_user; //serve per salvare, viene chiamato questo super array
    $_SESSION["cognome"] = $utente_cognome;

    if($nome_check) {
        //header("Location:pagina.php");
        $flag_nome = true;
    } else {
        //$_SESSION["nome"] = $nome_user;
        //header("Location:contatti.php");
        $flag_nome = false;
    }
    $cognome_pattern = "/^[0-9][a-z]*[qwe]$/"; // in questo pattern la prima lettere deve essere un numero, la parte centrale una lettere e l ultima lettere deve essere una tra qwe.
    $cognome_check = preg_match($cognome_pattern, $cognome_user);

    if($cognome_check) {
        $flag_cognome = true;
    } else {
        $flag_cognome = false;
    }

    if($flag_nome && $flag_cognome){
        header("Location:pagina.php");
    } else {
        header("Location:contatti.php");
    }


?>