<?php
if (isset($_GET["ubicacion"])) {
    if ($_GET["ubicacion"] == "Inicio") {
        include "modulos/navegacion/" . $_GET["ubicacion"] . ".php";
    } else if (
        $_GET["ubicacion"] == "dashboard" || $_GET["ubicacion"] == "Ver-categoria" ||
        $_GET["ubicacion"] == "Registrar-categoria" || $_GET["ubicacion"] == "Registrar-venta" ||
        $_GET["ubicacion"] == "Historial-venta" || $_GET["ubicacion"] == "faq" || $_GET["ubicacion"] == "Contactanos" ||
        $_GET["ubicacion"] == "Ver-categoria-cliente" || $_GET["ubicacion"] == "Historial-compra" || $_GET["ubicacion"] == "Quienes" ||
        $_GET["ubicacion"] == "Perfil"
    ) { ?>

<!DOCTYPE html>
        <html lang="es">


<div class="wrapper">
    <?php
    include "modulos/navegacion/" . $_GET["ubicacion"] . ".php";
    ?>
</div>