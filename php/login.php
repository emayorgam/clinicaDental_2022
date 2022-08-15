<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/styles.css">

    <title>Iniciar Sesión Clínica Especialidades</title>
</head>
<body>

<div>
    <h1 class="login-titulo">Clínica Especialidades</h1>

    <div class="container1-pg3">
      <form action="../PHP/autenticar_usuario.php" method="POST">

        <label class="label-pg3" for="usuario">Usuario</label>
        <input class="input-pg3" type="text" name="usuario" id="usuario" required="true" placeholder="Usuario...">

        <label class="label-pg3" for="contrasena">Contraseña</label>
        <input class="input-pg3" type="password" name="contrasena" id="contrasena" required="true" placeholder="Contraseña...">



        <div class="elemento" id="ingreso">
          <input class="btnIngresar" id="ingresar" type="submit" value="INGRESAR">
        </div>

        <div class="Botones_adicionales">
          <a class="Link_rcuenta" href="enviar_contra.php" type="button">Recuperar contraseña</a>
          <br>
          <input  type="reset" value="Limpiar">
          <br>
        </div>

      </form>

    </div>

    <div class="container2-pg3">
      <p>No tiene cuenta? <a href="registro.php">Ingrese aquí</a>.</p>
    </div>
  </div>




</body>
</html>