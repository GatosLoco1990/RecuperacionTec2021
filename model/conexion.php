<?php

try{

    $conexion = mysqli_connect("localhost","usu1","YrON5gSk6I5V","jgandica_recbd");
    
} catch (PDOException $error){
    echo 'Conection error: ' . $error->getMessage();
}
?>
