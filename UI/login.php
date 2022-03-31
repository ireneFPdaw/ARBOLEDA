<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>

    <form  method="post">

    <fieldset>

            <label for="user">Username</label> <input type="text" class="loginInput" size="20" name="username"><br />

            <label for="pass">Password</label> <input type="password" class="loginInput" AUTOCOMPLETE="off" size="20" name="password"><br />

            <br />

            <p class="submit"><input type="submit" value="Login" name="Login"></p>
            <a href="registro.php">Si no estás registrado,haz click aquí</a>
            <p>Esta es la prueba para ver si se sube el código mofificado</p>
    </fieldset>

</form>

<?php  

  include "../BS/Usuario/gestionLogin.php";
  

?>
    
</body>
</html>