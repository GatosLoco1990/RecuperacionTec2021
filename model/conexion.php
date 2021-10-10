<?php

try{

    $conexion = mysqli_connect("localhost","root","","jgandica_recbd");
    
} catch (PDOException $error){
    echo 'Conection error: ' . $error->getMessage();
}
?>
