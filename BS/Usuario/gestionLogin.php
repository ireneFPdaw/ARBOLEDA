<?php

session_start();
require "../DA/Usuario/DALogin.php";

// Compruebo que los valores están seteados
if (isset($_POST["username"]) && isset($_POST["password"])){

    $usuario = $_POST["username"];
    $pass = $_POST["password"];

    $hash = getHashFromUser($usuario);

    if (!empty($hash)){

        //Compruebo contraseñas
        if (password_verify($pass,$hash)){

            //Inicializo la sesión
            $_SESSION["autenticado"] = 1;
            $_SESSION["nombreUsuario"] = $usuario;

            //Redirigo a un menu...o lo que sea
            //header("Location: ...");
            echo "Acceso permitido";
            header("Location: ./home.php");
            
        }else{
            $_SESSION["autenticado"] = 0;
            echo "Acceso denegado, contraseña incorrecta";
        }

    }else{
        echo "Usuario no existente en la base de datos";
    }



}

?>