<?php
require_once 'conexion.php';

$empleado = $_POST['Empleado'];
$cliente = $_POST['Cliente'];
$modopago = $_POST['ModoPago'];
$cantidad = $_POST['Cantidad'];
$precio = $_POST['Precio'];
$total = $_POST['totalPago'];

date_default_timezone_set('America/Bogota');
$fecha =  date('d-m-Y');


$query = "INSERT INTO factura (id_fact, id_emp, id_modopago, id_cliente, fecha_pago, total_pagar) VALUES (NULL, '$empleado', '$modopago', '$cliente', '$fecha', '100')";

$sql = $conexion->query($query );


if ($sql) {
    $respuesta = array('respuesta' => 'exito');
} else {
    $respuesta = array('respuesta' => 'error');
}

echo json_encode($respuesta);

mysqli_close($conexion);
