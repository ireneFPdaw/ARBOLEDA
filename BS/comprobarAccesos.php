<?php
session_start();
echo     
'<a href="../BS/cerrarSesion.php">Cerrar Sesion</a>
<a href="home.php">Home</a>
<a href="modificarModulos.php">Modificar Modulos</a>
<a href="eliminarProfesor.php">Eliminar Profesor</a>

<h1>Buenas, '.$_SESSION["nombreUsuario"].'</h1>';

if(isset($_SESSION["autenticado"])){
    if($_SESSION["autenticado"] == 0){
        header("Location: ./login.php");
    }
}else{
    header("Location: ./login.php");
}

?>