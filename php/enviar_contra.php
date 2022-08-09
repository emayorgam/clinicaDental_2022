<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Recuperar Contraseña</title>
    <link rel="stylesheet" href="../CSS/style_login.css">
</head>

<body>
    <h1>Clinica Especialidades</h1>
    <div class="container">
        <form action="enviar_contra.php" method="POST">

            <div class="elementoA">
                <label for="usuario">Correo electrónico</label>
                <input type="text" name="email" value="" placeholder="email" />
            </div>

            <div class="elemento" id="ingreso">
                <input id="ingresar" type="submit" value="Recuperar">
            </div>
            <div class="Botones_adicionales">
                <br>
                <input id="boton_limpiar" type="reset" value="Limpiar">
                <br>
                <p class="login-register-text">No tiene cuenta? <a href="registro.php">Ingrese aqui</a>.</p>
                <br>
                <a href="login.php">LogIn</a>
            </div>
        </form>
    </div>

    <?php
    try {
        if (isset($_POST['email']) && !empty($_POST['email'])) {
            $pass = "contrasena";
            $mail = $_POST['email'];

            //Conexion con la base
            $connection = mysqli_connect("localhost", "root", "", "clinicadentalbd");
            // Check connection
            if ($connection->connect_error) {
                die("Connection failed: " . $connection->connect_error);
            }

            $sql = "Update usuarios Set contrasena='$pass' Where correo='$mail'";

            if ($connection->query($sql) === TRUE) {
                echo "usuario modificado correctamente ";
            } else {
                echo "Error modificando: " . $connection->error;
            }

            $to = $_POST['email'];
            $from = "From: " . "Clinica Dental";
            $subject = "Recordatorio de contraseña";
            $message = "El sistema le asigno la siguiente clave " . $pass;


            mail($to, $subject, $message, $from);
            echo 'Correo enviado satisfactoriamente a' . $_POST['email'];
        } else
            echo 'Informacion incompleta';
    } catch (Exception $e) {
        echo 'Excepción capturada: ',  $e->getMessage(), "\n";
    }

    ?>

</body>

</html>