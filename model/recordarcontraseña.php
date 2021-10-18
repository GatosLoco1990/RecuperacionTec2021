<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Recuperar</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="view/presentacion/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="view/presentacion/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="view/presentacion/dist/css/adminlte.min.css">
    <!-- Sweet alert2 -->
    <link rel="stylesheet" href="view/presentacion/dist/css/sweetalert2.min.css">
</head>

<body class="hold-transition login-page">

<div class="login-box">
    
    <div class="login-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="#" class="h1"><b>Olimpica</b>RGV</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Ingresa para iniciar sesión</p>


                <form action="recordarcontraseña.php" method="POST">
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
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="view/presentacion/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="view/presentacion/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="view/presentacion/dist/js/adminlte.min.js"></script>
    <!-- Sweet alert2-->
    <script src="view/presentacion/dist/js/alertas.js"></script>
    <script src="view/presentacion/dist/js/sweetalert2.min.js"></script>
    <!-- Jquery Validation -->
    <script src="view/presentacion/plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="view/presentacion/plugins/jquery-validation/additional-methods.min.js"></script>
    <!-- Login JS-->
    <script src="view/presentacion/dist/js/login.js"></script>

</body>

</html>