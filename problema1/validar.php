<?php
    include "variables.php";
    session_start();
    
    $usuari = isset($_POST["usuari"]) ? $_POST["usuari"] : "";
    $edat = isset($_POST["edat"]) ? $_POST["edat"] : "";
    $condicions = isset($_POST["condicions"]) ? true : false;

    // controlem que s'hagi informat l'usuari.
    if ($usuari) {
 
        if (in_array($usuari, $llistaUsusaris)) {
 
            $_SESSION['login'] = true;
            $_SESSION['user'] = $usuari;
            $_SESSION['condicions'] = $condicions;

            header("Location: resultat.php");
            exit;
        } else {  
            session_destroy();

            header("Location: index.php?error=Usuari no trobat");
            exit;
        }
    } else {

        header("Location: index.php?error=No has informat cap valor");
        exit;
    }
?>
