<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Recuperar Contraseña</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>

<div>
    <h1>Recuperar contraseña</h1>

    <div class="container1-pg3">
      <form action="enviar_contra.php" method="POST">

        <label class="label-pg3" for="usuario">Usuario</label>
        <input class="input-pg3" type="text" name="usuario" id="usuario" required="true" placeholder="Usuario...">

        <label class="label-pg3" for="contrasena">Nueva contraseña</label>
        <input class="input-pg3" type="password" name="contra" id="contrasena" required="true" placeholder="Nueva contraseña...">


        <div class="elemento" id="ingreso">
          <input id="ingresar" class="btnIngresar" type="submit" value="CAMBIAR">
        </div>

        <div class="Botones_adicionales">
          <input  type="reset" value="Limpiar">
          <br>
          <a href="login.php" id="Link_rcuenta" style="text-decoration: none;">LogIn</a>
        </div>

      </form>
    </div>

    <div class="container2-pg3">
      <p>No tiene cuenta? <a href="registro.php">Ingrese aquí</a>.</p>
    </div>
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
