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
                <label for="usuario">Recuperar Contraseña</label>
                <input type="text" name="usuario" value="" placeholder="usuario" />
            </div>
            <div class="elementoA">
                <input type="text" name="contra" value="" placeholder="Nueva contraseña" />
            </div>

            <div class="elemento" id="ingreso">
                <input id="ingresar" type="submit" value="Cambiar">
            </div>
            <div class="Botones_adicionales">
                <br>
                <input id="boton_limpiar" type="reset" value="Limpiar">
                <br>
                <a href="login.php" id="Link_rcuenta" style="text-decoration: none;">LogIn</a>
                <br>
                <p class="login-register-text">No tiene cuenta? <a href="registro.php">Ingrese aqui</a>.</p>
                <br>
            </div>
        </form>
    </div>

    <?php
    try {
        if (isset($_POST['usuario']) && !empty($_POST['usuario'])) {
            $pass = $_POST['contra'];
            $usu = $_POST['usuario'];

            //Conexion con la base
            $connection = mysqli_connect("localhost", "root", "", "clinicadentalbd");
            // Check connection
            if ($connection->connect_error) {
                die("Connection failed: " . $connection->connect_error);
            }

            $sql = "Update usuarios Set contrasena='$pass' Where usuario='$usu'";

            if ($connection->query($sql) === TRUE) {
                echo "usuario modificado correctamente ";
            } else {
                echo "Error modificando: " . $connection->error;
            }
        } else
            echo 'Informacion incompleta';
    } catch (Exception $e) {
        echo 'Excepción capturada: ',  $e->getMessage(), "\n";
    }

    ?>

</body>

</html>
