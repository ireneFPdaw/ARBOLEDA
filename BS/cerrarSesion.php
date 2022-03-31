<?php

    session_start();

    if(isset($_SESSION["autenticado"]) && $_SESSION["autenticado"] != 0){
        //DESTRUIMOS LAS SESION
        $_SESSION = Array();
        session_destroy();
        //REDIRIGIR AL LOGIN
        header("Location: ../UI/login.php");
    }

?>