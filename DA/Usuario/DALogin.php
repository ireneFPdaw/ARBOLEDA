<?php

 
// RUTA CORRECTA DESDE LOGIN
include "../DA/bd_Arboleda.php";


function getHashFromUser($usuario){

    global $bd;

    $preparada = $bd-> prepare("call getContraByNombre(?)");
    $preparada -> bindParam(1, $usuario, PDO::PARAM_STR);
    $preparada -> execute();

    $hash = $preparada -> fetch(PDO::FETCH_NUM);
    $numFilas = $preparada ->rowCount();

    if($numFilas != 0){
        return $hash[0];
    }


}
    


?>