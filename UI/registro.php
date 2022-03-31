<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="content">

        <form method="post">

        <fieldset>

                <label for="user">Username</label> <input type="text"  size="20" name="usuario"><br />
                <label for="pass">Password</label> <input type="password" class="loginInput" AUTOCOMPLETE="off" size="20" name="contrasena"><br />
                <label for="pass">Verificar Password</label> <input type="password" class="loginInput" AUTOCOMPLETE="off" size="20" name="contrasenaB"><br />
                <br/>
                <p class="submit"><input type="submit" value="CREAR" name="crear"></p>

        </fieldset>

    </form>
    <?php
        include "../BS/Usuario/gestion_registro.php";

    ?>
</body>
</html>