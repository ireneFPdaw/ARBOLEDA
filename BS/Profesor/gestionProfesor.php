<?php
    //Abrir archivo de DA => desde dónde voy a obtener los datos 
    require "../DA/Profesores/accesoDatosProf.php";

     //Si ha sido seleccionado algun profesor entonces el id del profesor que coges es el seleccionado
     if (isset($_POST["select_1"]) && array_key_exists('delete_profesor', $_POST)) {

        $idProfesor = $_POST["select_1"]; //id seleccionado

        $resultado = eliminarProfesor($idProfesor);//DA

        if ($resultado) {
            //echo "El profesor '" . $profesor['nombre'] . " " . $profesor['apellido']."' se ha eliminado con exito.";
            echo "Profesor ha sido borrado";
        }else {
            echo "Profesor no borrado";
        }
    }
    //VV donde almacenas los datos que has recogido de la base de datos (DA)
    $profesores = getProfesores(); //como un array(DA)

    //Si hay datos obtenidos en la lista se hace lo siguiente......sino mensaje
    if ($profesores) {
        //Te pinta el desplegable
        if(isset($_POST["select_1"])){
            $selec = $_POST["select_1"];
        }else{
            $selec = $profesores[0]['idprofesor'];
        }
        $profe = $profesores[0];
        echo "<select name='select_1' onChange='submit()'>";
        foreach ($profesores as $profesor) { 
            if($profesor['idprofesor'] == $selec){
            echo "<option value='" . $profesor['idprofesor']."' selected>" . $profesor['nombre'] . " " . $profesor['apellido'] . "</option>";
            $profe = $profesor;
            }else
            echo "<option value='" . $profesor['idprofesor']."'>" . $profesor['nombre'] . " " . $profesor['apellido'] . "</option>";

        }
        echo "</select>";
    }else {
      echo "<br><br>No existen profesores en la bdd.";
    }
    echo "<p>".$profe["nombre"]."</p>";
    echo "<p>".$profe["apellido"]."</p>";
    echo "<p>".$profe["dni"]."</p>";
   
?>