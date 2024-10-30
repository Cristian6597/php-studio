<?php
    $nome_user = $_POST["nome"]; //il nome all' interno dell array si chiama indice, il nome riprende il form da contatti e deve essere uguale a quello scritto in name=""
    $cognome_user = $_POST['cognome'];

    $flag_nome = false;
    
    if($nome_user == "pippo"){
        $flag_nome = true;
    }
    
    $flag_cognome = false;
    
    if($cognome_user == "verde"){
        $flag_cognome = true;
    }

    if($flag_nome && $flag_cognome){
        header("Location:pagina.php"); // sintassi per aprire una pagina
    }
    else {
        header("Location:contatti.php");
    }


?>