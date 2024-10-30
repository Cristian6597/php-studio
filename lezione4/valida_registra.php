<?php
    //avvio sessione
    session_start();


    //inizializzo le variabili

    $cognome = $_POST['cognome'];
    $nome = $_POST['nome'];
    $user = $_POST['user'];
    /* $pwd = $_POST['pwd']; */
    $pwd = password_hash($_POST['pwd'], PASSWORD_BCRYPT); //cripta le password

    /* $genere = $_POST['genere']; */
    $genere = isset($_POST['genere']) ? $_POST['genere'] : ""; //isset serve a vedere se una variabile è definita o meno
    $data_nascita = $_POST['data_nascita'];
    $rosso = isset($_POST['rosso']) ? $_POST['rosso'] : "no";
    $verde = isset($_POST['verde']) ? $_POST['verde'] : "no";
    $giallo = isset($_POST['giallo']) ? $_POST['giallo'] : "no";
    $comune = $_POST['comune'];

    //inserisco il file config
    include("include/config.php");

    //collegamento al db
    $link = new mysqli($dbhost, $dbuser, $dbpassword, $dbname);


    //chiudo il collegamento se non mi collego
    if($link == false ){
        die();
    }

    $sql_insert = "INSERT INTO alunni (cognome, nome, user, pwd, genere, data_nascita, rosso, verde, giallo, comune) 
    VALUES ('$cognome', '$nome', '$user', '$pwd', '$genere', '$data_nascita', '$rosso', '$verde', '$giallo', '$comune')";
    //si chiama istruzione sql, utilizza linguaggio sql. La instassi sql va scritta in maiuscolo.
    //l'ordine dei campi deve essere identico sennò si mischiano.


    //inserisco i dati nel db
    $result = $link->query($sql_insert);

    if($result) {
        echo "dati inseriti";
    } else {
        echo "dati non inseriti";
    }




    $link->close(); //come sintassi equivale come su js a link.close essendo link un oggetto e close un metodo.

?>