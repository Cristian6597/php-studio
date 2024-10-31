<?php
    session_start();


    $nome = $_POST['nome'];
    $pwd = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $email = $_POST['email'];
    $data_nascita = $_POST['data_nascita'];
    $provincia = $_POST['provincia'];

    //inserisco il file config
    include("include/config.php");

    //collegamento dal db
    $link = new mysqli($dbhost, $dbuser, $dbpassword, $dbname);

    
    //chiudo il collegamento se non va a buon fine
    if($link == false){
        die();
    };

    $sql_insert = "INSERT INTO dipendenti (nome, pwd, email, data_nascita, provincia) 
    VALUES ('$nome', '$pwd', '$email', '$data_nascita', '$provincia')";

    //inserisco i dati nel db
    $result = $link->query($sql_insert);

    if($result){
        echo "dati inseriti correttamente";
    } else {
        echo "errore";
    }

    $link->close();
?>