<?php

    include "../DA/bd_Arboleda.php";

    function getCiclos() {
        //echo "acceso a datos módulo";
        global $bd;

        try {

            $prepare= $bd-> prepare("call getCursos()");
            $prepare -> execute();

            //$prepare ahora es una tabla ficticia con un resultado V o F

            $ciclos = Array();


            for ($i = 0; $i < $prepare->rowCount(); $i++){
                
                $ciclobd = $prepare -> fetch(); //señalar fila

                $ciclos[$i] = array(
                    "id" => $ciclobd["idcurso"],
                    "nombre" => $ciclobd["nombre"]
                ) ;
            }

            return $ciclos;
            //var_dump($ciclo);

        } catch (PDOException $ex) {
            echo $ex -> getMessage();
        }
    }

    function getModulos($idCurso) {
        global $bd;
        try {
            $prepare= $bd -> prepare("call getModulosByCurso(?)");
            $prepare -> bindParam(1, $idCurso, PDO::PARAM_INT, 5);

            $prepare -> execute();

            for ($rows = 0; $rows < $prepare -> rowCount(); $rows++){
                $modulobd = $prepare -> fetch();

                $modulos[$rows] = array(
                    "id" => $modulobd["idmodulo"],
                    "nombre" => $modulobd["nombre"],
                    "horas" => $modulobd["horas"],
                    "idProfesor" => $modulobd["idprofesor"],
                    "idCurso" => $modulobd["idcurso"]
                ) ;
            }

            return $modulos;
        } catch (PDOException $ex) {
            echo $ex -> getMessage();
        }
    }

    
    function getHorasDA($modulo) {

        global $bd;
        $set = $bd->prepare("call getHoras(?)");
        $set->bindParam(1,$modulo,PDO::PARAM_INT,11);
        $set->execute();
        $horas=  $set -> fetch(); //Almacenada la hora

        return $horas["horas"];//devuelve un string

        //opcion 2 devuelve un array si hacemos return $horas.

    }

    function updateModulo($horas,$curso){
        global $bd;
        $set = $bd->prepare("call updateModulo(?,?)");
        $set->bindParam(1,$horas,PDO::PARAM_INT,11);
        $set->bindParam(2,$curso,PDO::PARAM_INT,11);

        return $set->execute();
    }


?>