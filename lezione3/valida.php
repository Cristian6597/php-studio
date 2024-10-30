<?php
    session_start();
    //valido username
    $username = $_POST['user']; //super array ovver un array globale
    $flag_username = false;
    $username_patter = "/^[a-z][a-z]*[a-z]$/";
    $username_check = preg_match($username_patter, $username); //serve a validare
    $_SESSION['user'] = $username; //serve a vedere se quello che ha scritto l'utente è corretto
    if($username_check) {
        $flag_username = true;
    }

    //valido comune
    $comune = $_POST['comune'];
    $flag_comune = false;
    if($comune != "0"){
        $flag_comune = true;
    }
    $_SESSION['comune'] = $comune; // serve a salvare i dati nella variabile comune

    //valido giorno
    
    $giorno = $_POST['giorno'];
    $flag_giorno = false;
    if($giorno != "0") {
        $flag_giorno = true;
    }
    $_SESSION['giorno'] = $giorno;
    


    if($flag_username && $flag_comune && $flag_giorno){
        header("Location:saluto.php");
    }
    else {
        header("Location:home.php");
    }
?>

