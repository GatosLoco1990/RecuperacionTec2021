<?php


require_once 'conexion.php';



$apellido = $_POST['ape_emp'];
$nombre = $_POST['nom_emp'];
$documento = $_POST['doc_emp'];
$fenac = $_POST['fecha_nac_emp'];
$telefono = $_POST['telefono_emp'];
$direccion = $_POST['dir_emp'];
$correo = $_POST['mail_emp'];
$fecha = $_POST['fecha'];
$sucursal = $_POST['id_sucursal'];

$query = "INSERT INTO empleado (id_emp, ape_emp, nom_emp, doc_emp, fecha_nac_emp, telefono_emp, dir_emp, mail_emp, fecha, id_sucursal) VALUES (NULL, '$apellido', '$nombre', '$documento', '$fenac', '$telefono', '$direccion', '$correo', '$fecha', '$sucursal')";

$sql = $conexion->query($query );


if ($sql) {
    $respuesta = array('respuesta' => 'exito');
} else {
    $respuesta = array('respuesta' => 'error');
}

echo json_encode($respuesta);

mysqli_close($conexion);
