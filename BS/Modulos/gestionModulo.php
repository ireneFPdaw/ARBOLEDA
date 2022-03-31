<?php
    include("../DA/Modulos/accesoModulo.php");

 //Boton que al pulsarlo realiza la funcion de modificacion
 if(array_key_exists('modificar', $_POST)){
    actualizar();
  }




    function getCiclosBS(){
        
        //echo "negocio";
        $ciclos = getCiclos();

        if(isset($_POST["selectCursos"]))
        $seleccionado = $_POST["selectCursos"];
        else
        $seleccionado = 0;
        
        //var_dump($ciclos);
        //return $ciclos;

         for ($rows = 0; $rows < count($ciclos); $rows++) {
             if ($seleccionado == $ciclos[$rows]['id'] ) {
                 echo "<option value='".$ciclos[$rows]['id']."' selected>".$ciclos[$rows]['nombre']."</option>";
             } else {
                 echo "<option value='".$ciclos[$rows]['id']."'>".$ciclos[$rows]['nombre']."</option>";
             }
         }
    }

    function getModulosBS() {
     
        if (isset($_POST['selectCursos'])) {
            $idCurso = $_POST['selectCursos'];

            if(isset($_POST["selectModulos"]))
            $seleccionado = $_POST["selectModulos"];
            else
            $seleccionado =0;


            $modulos = getModulos($idCurso);

            echo "<select name='selectModulos' onchange='submit()'>";
            for ($rows = 0; $rows < count($modulos); $rows++) {
                if ($seleccionado == $modulos[$rows]['id'] ) {
                    echo "<option value='".$modulos[$rows]['id']."' selected>".$modulos[$rows]['nombre']."</option>";
                } else {
                    echo "<option value='".$modulos[$rows]['id']."'>".$modulos[$rows]['nombre']."</option>";
                }
            }
            echo "</select><br/><br/>";
        } 

    }


    function getHoras() {
        
        if(isset($_POST['selectModulos'])){

            $modulo = $_POST['selectModulos'];

            $horas_modulo = getHorasDA($modulo);

           return $horas_modulo;
        }
  
    }

    function actualizar(){
        //Si están seleccionados los dos 
        if (isset($_POST['selectCursos']) && isset($_POST["selectModulos"])){

            $horas_cambiadas = $_POST['horas'];
            $modulo_seleccionado = $_POST["selectModulos"];

            if(updateModulo($horas_cambiadas,$modulo_seleccionado))
            echo "moficiado";
            else
            echo "no modificado";
            // T o F

        }
    }



    ?>