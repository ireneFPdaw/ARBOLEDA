<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            // include "../BS/comprobarAccesos.php";
            include("../BS/Modulos/gestionModulo.php");
        ?>

        <div class="actualizarHorasModulos">
            <h3>Actualizar Horas Modulos</h3>

            <form method="POST">
                <select name="selectCursos" onchange="submit()">
                    <?php
                        getCiclosBS();
                    ?>
                </select>
                    <?php
                        getModulosBS();
                    ?>
                    
                <?php
                    echo'<input type="number" name="horas" value='.getHoras().'>';
                ?>
                <input type="submit" value="actualizar" name='modificar'>
              
                  
            </form>
        </div>
        
    </body>

</html>