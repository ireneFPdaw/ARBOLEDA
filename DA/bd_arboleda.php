<?php

try{

    $host='127.0.0.1';
    $dbname= 'arboledaana';
    $user_bd= 'root';
    $pass_bd= '';

    $conn="mysql:dbname=$dbname;host=$host";
    
    $bd= new PDO($conn, $user_bd, $pass_bd);

}catch(PDOException $e){
    echo $e->getMessage();
}

//echo "conexión bd";

?>