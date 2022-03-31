<?php

 
// RUTA CORRECTA DESDE LOGIN
include "../DA/bd_Arboleda.php";

//estamos modificando
//esto es para el registro
function insertarBD($usuario, $clave_hash){
    global $bd;
    try{
        //consulta preparada en BD
        $preparada= $bd->prepare("call createUser(?,?)");
        $nom = $usuario;
        $pass = $clave_hash;
        $preparada->bindParam(1,$nom,PDO::PARAM_STR,50);
        $preparada->bindParam(2,$pass,PDO::PARAM_STR,255);
    
        return $preparada->execute();
    
    
        }catch(PDOException $e){
    
            echo $e;
    
        }
    
    }

    


?>