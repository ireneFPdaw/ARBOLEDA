<?php
    include "../DA/bd_Arboleda.php"; //Acceso a la bd

    //include "../bd_Arboleda.php";

    function getProfesores () {
        global $bd;

        try{
            $preparada = $bd-> prepare("call getProf()");
            $preparada -> execute();
            $profesores = Array(); //lista donde almacenaré los datos que mi consulta saca
    
            //Cómo almaceno en mi lista los datos?
            while ($resultados = $preparada -> fetch()) {
                //echo " " . $resultados['idprofesor'] . " " . $resultados['nombre'] . "<br>";
                array_push($profesores, $resultados);
                
            }
    
            return $profesores;


        }catch(PDOException $e){

        }
        
    }

    function eliminarProfesor($profesor) {
        global $bd;
        try {
            $preparada = $bd-> prepare("call deleteProfesor(?)");
            $preparada -> bindParam(1,$profesor,PDO::PARAM_INT,11);
            return $preparada -> execute();
            
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }


?>