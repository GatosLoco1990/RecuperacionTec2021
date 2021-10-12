<?php


require_once 'conexion.php';

$apellido = $_POST['apellidoEmpleado'];
$nombre = $_POST['nombreEmpleado'];
$documento = $_POST['documentoEmpleado'];
$fenac = $_POST['fenacEmpleado'];
$telefono = $_POST['telEmpleado'];
$direccion = $_POST['dirEmpleado'];
$correo = $_POST['correoEmpleado'];
$fecha = $_POST['fechaingEmpleado'];
$sucursal = $_POST['sucursalEmpleado'];
$rol = $_POST['rolEmpleado'];

$query = "INSERT INTO empleado (id_emp, ape_emp, nom_emp, doc_emp, fecha_nac_emp, telefono_emp, dir_emp, mail_emp, fecha, id_sucursal, rol) VALUES (NULL, '$apellido', '$nombre', '$documento', '$fenac', '$telefono', '$direccion', '$correo', '$fecha', '$sucursal', '$rol')";

$sql = $conexion->query($query );


if ($sql) {
    $respuesta = array('respuesta' => 'exito');
} else {
    $respuesta = array('respuesta' => 'error');
}

echo json_encode($respuesta);

mysqli_close($conexion);
