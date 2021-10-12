<?php


require_once 'conexion.php';
//die(json_encode($_POST)) ;

$codigo = $_POST['codigoProd'];
$nombre = $_POST['nombreProducto'];
$descripcion = $_POST['descripcionProducto'];
$precio = $_POST['precioProducto'];
$stock = $_POST['stock'];
$marca = $_POST['marcaProducto'];
$categoria = $_POST['categoriaProducto'];
$fecha = $_POST['fechaProducto'];



$query = "INSERT INTO `producto` (`id_producto`, `cod_producto`, `nom_producto`, `desc_producto`, `precio`, `stock`, `marca`, `id_categoria`, `fecha_creacion`) VALUES (NULL, '$codigo', '$nombre', '$descripcion', '$precio', '$stock', '$marca', '$categoria', '$fecha')";
//die(json_encode($query));


$sql = $conexion->query($query );


if ($sql) {
    $respuesta = array('respuesta' => 'exito');
} else {
    $respuesta = array('respuesta' => 'error');
}

echo json_encode($respuesta);

mysqli_close($conexion);
