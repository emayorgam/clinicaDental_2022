<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="../css/styles.css">
    <title>Registro Clínica Especialidades</title>
</head>
<body>   

<h1>Registrese</h1>
  <div class="container1-pg4">
    <form action="../PHP/conexion_registro.php" method="post">

    <table>
        <tr>
          <td><label for="cedula">Cédula</label></td>
          <td><input type="text" name="cedula" placeholder="Cédula..."></td>
        </tr>

        <tr>
          <td><label for="nombre">Nombre</label></td>
          <td><input type="text"  name="nombre" placeholder="Nombre..."></td>
        </tr>

        <tr>
          <td><label for="apellido_1">Apellido Paterno</label></td>
          <td><input type="text" class="apellido_1" id="apellido_1" name="apellido_1" placeholder="Apellido Paterno..."></td>
        </tr>

        <tr>
          <td><label for="apellido_2">Apellido Materno</label></td>
          <td><input type="text"  name="apellido_2" placeholder="Apellido Materno..."></td>
        </tr>

        <tr>
          <td><label for="usuario">Nombre de Usuario</label></td>
          <td><input type="text" name="usuario" placeholder="Usuario..."></td>
        </tr>

        <tr>
          <td><label for="correo">Correo</label></td>
          <td><input type="text" name="correo" placeholder="Correo..."></td>
        </tr>

        <tr>
          <td><label for="contrasena">Contraseña</label></td>
          <td><input type="password" name="contrasena" placeholder="Contraseña..."></td>
        </tr>
      </table>

      <div class="Botones_adicionales botones_registrar">
          <input type="submit" class="btnCancelar boton-pg4" value = "CANCELAR">
          <input type="submit" class="btnAceptar  boton-pg4" value = "ACEPTAR">
      </div>

      <div class="Botones_adicionales">
        <input class="btnLimpiar" id="boton_limpiar" type="reset" value="Limpiar">
        <br>
        <p class="registerText">Tiene cuenta? <a href="login.php">Ingrese aquí</a>.</p>
      </div>

    </form>
  </div>


</body>
</html>