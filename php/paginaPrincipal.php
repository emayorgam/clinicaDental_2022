<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Clinica Especialidades</title>

  
<!-- CSS Stylesheets -->
<link rel="stylesheet" href="../css/styles.css">


  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;500&family=Montserrat:wght@300;400;500&family=Cormorant+Garamond:wght@300;400;900;&display=swap" rel="stylesheet">

<!-- CSS Stylesheets for calendar -->
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

<!-- CSS Stylesheets for timepicker -->
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">



  <!-- Font Awesome ICONS-->
  <script src="https://kit.fontawesome.com/1226f530d5.js" crossorigin="anonymous"></script>


</head>

<body>

    <!-- Página principal -->
<section id="pagina-principal">

  <div class="container1-pg1">
    <a class="nav-link" href="#ubicacion">UBICACIÓN</a>
    <a class="nav-link" href="#servicios">SERVICIOS</a>
    <a class="nav-link" href="#contacto">CONTACTO</a>
    <a class="nav-link" href="../PHP/cerrarSession.php">SALIR</a>

  </div>


  <div class="container2-pg1">
    <h1 class="pg1-titulo">Clínica Especialidades</h1>
    <i class="fa-solid fa-tooth"></i>
  </div>

  <div class="container3-pg1">
    <a class="btn1" href="#agendar-cita">AGENDAR CITA</a>
  </div>

</section>



   <!--Agendar cita-->
   <section id="agendar-cita">
    <div>
        <h1>AGENDAR CITA</h1>

    <div class="container1-pg2">
        <form action="../PHP/conexion_agendarCita.php" method="post">

          <table>

            <tr>
              <td><label for="nombre">NOMBRE</label></td>
              <td><input type="text" name="nombre" placeholder="NOMBRE..."></td>
            </tr>

            <tr>
              <td><label for="apellidos">APELLIDOS</label></td>
              <td><input type="text" name="apellidos" placeholder="APELLIDOS..."></td>
            </tr>

            <tr>
              <td><label for="telefono">TELÉFONO</label></td>
              <td><input type="text" name="telefono" placeholder="0000-0000"></td>
            </tr>

            <tr>
              <td><label for="correo">CORREO</label></td>
              <td><input type="text" name="correo" placeholder="ejemplo@mail.com"></td>
            </tr>

            <tr>
              <td><label for="servicio">SERVICIO</label></td>
              <td>
                <select name="servicio">
                  <option type="text" value="seleccionar">SELECCIONE UN SERVICIO...</option>
                  <option type="text" value="ortodoncia">Ortodoncia</option>
                  <option type="text" value="limpieza">Limpieza</option>
                  <option type="text" value="extraccion">Extracción</option>
                </select>
              </td>
            </tr>

            <tr>
              <td><label for="fecha">FECHA</label></td>
              <td><input type="text" name="fecha" id="datepicker" placeholder="DD/MM/YYYY"></td>
            </tr>

            <tr>
              <td><label for="hora">HORA</label></td>
              <td><input type="text" name="hora" class="timepicker" placeholder="H:MM"></td>
            </tr>


            <tr>
              <td class="boton"><input type="submit" class="btnCancelar" value = "CANCELAR">
              <td class="boton"><input type="submit" class="btnAceptar"  value = "ACEPTAR"></td></td>
            </tr>


          </table>
          </form>
    </div>
</div>

   </section>



 <!--Servicios-->
 <section id="servicios">

<div>

<h1>SERVICIOS</h1>

<div class="container1-pg5">
  <div class="ortodoncia div5">
      <h3 class="servicioNombre1 nombre">ORTODONCIA</h3>
  </div>

  <div class="limpieza div5">
      <h3 class="servicioNombre2 nombre">LIMPIEZA</h3>
  </div>

  <div class="extraccion div5">
      <h3 class="servicioNombre3 nombre">EXTRACCIÓN</h3>
  </div>

  <div class="botonServicio">
  <a class="btn1" href="#agendar-cita">AGENDAR CITA</a>
  </div>

</div>


</div>

</section>

<!--Ubicación-->
<section id="ubicacion">

    <div class="container1-pg6">
        <h1>UBICACIÓN</h1>
        <p class="datosUbicacion">Centro Comercial Plaza Heredia, Heredia, Costa Rica</p>
        <div class= "imagenUbicacion" >
        <img src="../css/imagenes/heredia.png" alt="mapa">
        </div>
    </div>

</section>

<!--Contacto-->
<section id="contacto">


    <div>
    <h1>CONTACTO</h1>

      <div class="container1-pg7">

      <div class="div7">
      <i class="fa-solid fa-phone contacto"></i>
        <h3 class="contacto">Teléfono</h3>
        <p class="contacto">(+506) 2244 4662 / 2244 2534</p>
      </div>

      <div class="div7">
      <i class="fa-solid fa-envelope contacto"></i>
        <h3 class="contacto">Correo</h3>
        <p class="contacto">clinicaespecialidades@gmail.com</p>
      </div>

      <div class="div7">
      <i class="fa-brands fa-facebook-f contacto"></i>
        <h3 class="contacto">Facebook</h3>
        <p class="contacto">ClinicaEspecialidadesCR</p>
      </div>

    </div>
  </div>

</section>


<!-- JavaScript & jQuery-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="../js/agendarCita.js"></script>
<script src="../js/hora.js"></script>



<!-- jQuery calendario-->
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>



<script src="../js/ui.datepicker-es.js"></script>



</body>

</html>
