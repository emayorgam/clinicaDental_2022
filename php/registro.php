<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="../CSS/styles.css">
    <title>Registro Clínica Especialidades</title>
</head>
<body>   

<h1>Registrese</h1>


  <div class="container1-pg4">
    <form action="../PHP/conexion_registro.php" method="post">

      <table>

        <tr>
          <td><label>Cédula</label></td>
          <td><input type="text" name="cedula" placeholder="Cédula..."></td>
        </tr>

        <tr>
          <td><label>Nombre</label></td>
          <td><input type="text" name="nombre" placeholder="Nombre..."></td>
        </tr>

        <tr>
          <td><label>Apellido Paterno</label></td>
          <td><input type="text" name="apellidoPaterno" placeholder="Apellido Paterno..."></td>
        </tr>

        <tr>
          <td><label>Apellido Materno</label></td>
          <td><input type="text" name="apellidoMaterno" placeholder="Apellido Materno..."></td>
        </tr>

        <tr>
          <td><label>Nombre de Usuario</label></td>
          <td><input type="text" name="usuario" placeholder="Usuario..."></td>
        </tr>

        <tr>
          <td><label>Correo</label></td>
          <td><input type="text" name="correo" placeholder="Correo..."></td>
        </tr>

        <tr>
          <td><label>Contraseña</label></td>
          <td><input type="text" data-role="calendarpicker" placeholder="Contraseña..."></td>
        </tr>

        <tr>
          <td class="boton-pg4"><a type="submit" class="btnCancelar" href="#">CANCELAR</a></td>
          <td class="boton-pg4"> <a type="submit" class="btnAceptar" href="#">ACEPTAR</a></td>
        </tr>

      </table>


      <div class="Botones_adicionales">
        <input class="btnLimpiar" id="boton_limpiar" type="reset" value="Limpiar">
        <br>
        <p class="registerText">Tiene cuenta? <a href="login.php">Ingrese aquí</a>.</p>
      </div>

    </form>
  </div>


    


</body>
</html>