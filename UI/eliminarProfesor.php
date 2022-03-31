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
        include "../BS/comprobarAccesos.php";
    ?>
    <form method='post'>
        <fieldset>
        <?php
            include "../BS/Profesor/gestionProfesor.php";
        ?>
            <input type='submit' id='borrar' value='Borrar' name='delete_profesor'>
        </fieldset>
    </form>


</body>

</html>