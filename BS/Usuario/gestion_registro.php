<?php
 //DIRECCIONES NECESARIAS ABRIR
 require "../DA/Usuario/DARegistro.php";

 //comprobarDatos();


function comprobarDatos(){
    //Comprobar valores formulario
    $valido = false;

        $cont = $_POST["contrasena"];
        $contB = $_POST["contrasenaB"];

        if($cont == $contB){     //si coinciden 
            
            $valido = true; //Hay datos en el formulario y coinciden cont
            
        }else
            echo "Las contraseñas no coinciden";
   
    return $valido;
}


function crearHash(){
    if(comprobarDatos()){

        //VV Necesarias
        $usuario = $_POST["usuario"];
        $passw = $_POST["contrasena"];

        //Clave hash --> aquí le paso el dni 
       $clave_hash = password_hash($passw, PASSWORD_DEFAULT);
       
       //Llamada funcion para insertar dato
       $creado = insertarBD($usuario,$clave_hash);
       
       if ($creado){
           echo "Usuario insertado";
       }else{
           echo "Usuario no insertado";
       }

    }
     }

   //COMPROBAR DATOS
    if(isset($_POST["usuario"]) && isset($_POST["contrasena"])
    && isset($_POST["contrasenaB"]))
    crearHash();


?>