<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Recuperar</title>
</head>

<body>

    <form action="recordarcontrasña.php" method="POST">
        <input type="text" name="email" value="" placeholder="email" /> <br />
        <input type="submit" value="Recordar contraseña" />
    </form>

    <?php

    require_once 'conexion.php';

    try {
        if (isset($_POST['email']) && !empty($_POST['email'])) {
            $pass = substr(md5(microtime()), 1, 10);
            $mail = $_POST['email'];


            $sql = "Update tbl_mh_usuario Set password='$pass' Where correo='$mail'";

            if ($conexion->query($sql) === TRUE) {
                echo "usuario modificado correctamente ";
            } else {
                echo "Error modificando: " . $conexion->error;
            }

            $to = $_POST['email']; //"destinatario@email.com";
            $from = "From: " . "Masterhouse";
            $subject = "Recordar contraseña";
            $message = "El sistema le asigno la siguiente clave " . $pass;

            mail($to, $subject, $message, $from);
            echo 'Correo enviado satisfactoriamente a ' . $_POST['email'];
        } else
            echo 'Informacion incompleta';
    } catch (Exception $e) {
        echo 'Excepción capturada: ',  $e->getMessage(), "\n";
    }

    ?>
</body>

</html>