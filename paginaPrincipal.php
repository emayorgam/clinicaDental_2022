<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Clinica Dental</title>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;500&family=Montserrat:wght@300;400;500&family=Cormorant+Garamond:wght@300;400&display=swap" rel="stylesheet">

  <!-- CSS Stylesheets -->
  <link rel="stylesheet" href="css/styles.css">

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
    <a class="nav-link" href="#iniciar-sesion">INICIAR SESIÓN</a>
    <a class="link-registrar registrar" href="#registrarse">Ó REGISTRARSE</a>
  </div>


  <div class="container2-pg1">
    <h1 class="pg1-titulo">Clínica</h1>
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
        <form action="/action_page.php">
          <table>

            <tr>
              <td><label>NOMBRE</label></td>
              <td><input type="text" name="nombre" placeholder="NOMBRE..."></td>
            </tr>

            <tr>
              <td><label>APELLIDO</label></td>
              <td><input type="text" name="apellido" placeholder="APELLIDO..."></td>
            </tr>

            <tr>
              <td><label>TELÉFONO</label></td>
              <td><input type="text" name="telefono" placeholder="TELÉFONO..."></td>
            </tr>

            <tr>
              <td><label>CORREO</label></td>
              <td><input type="text" name="correo" placeholder="CORREO..."></td>
            </tr>

            <tr>
              <td><label>SERVICIO</label></td>
              <td>
                <select name="servicio">
                  <option value="seleccionar">SELECCIONE UN SERVICIO...</option>
                  <option value="ortodoncia">Ortodoncia</option>
                  <option value="limpieza">Limpieza</option>
                  <option value="extraccion">Extracción</option>
                </select>
              </td>
            </tr>

            <tr>
              <td><label>FECHA</label></td>
              <td><input type="text" data-role="calendarpicker" placeholder="FECHA"></td>
            </tr>

            <tr>
              <td class="boton"><a type="submit" class="btnCancelar" href="#">CANCELAR</a></td>
              <td class="boton"> <a type="submit" class="btnAceptar" href="#">ACEPTAR</a></td>
            </tr>

          </table>
          </form>
    </div>
</div>

   </section>

   <!--Iniciar Sesión-->
    <section id="iniciar-sesion"> 
        <div>
            <h1 class="login-titulo">INICIAR SESIÓN</h1>

            <div class="container1-pg3">
                <form action="/action_page.php">
                  <label class="label-pg3">CORREO</label>
                  <br>
                  <input class="input-pg3" type="text" name="correo" placeholder="CORREO...">
                  <br>
                  <label class="label-pg3">CONTRASEÑA</label>
                  <br>
                  <input class="input-pg3" type="password" name="contrasena" placeholder="CONTRASEÑA..."> 
                  <br>
                  <a type="submit" class="btnIngresar" href="#">INGRESAR</a>
              </div>

                  <div class="container2-pg3">
                    <a class="link-registrar" href="#registrarse">REGISTRARSE</a>
                  </div>
                  
                </form> 
            

        </div>
    </section>

    <!-- Registrarse -->
    <section id="registrarse">
      <div>
        <h1>REGISTRARSE</h1>

    <div class="container1-pg4">
        <form action="/action_page.php">
          <table>

            <tr>
              <td><label>NOMBRE</label></td>
              <td><input type="text" name="nombre" placeholder="NOMBRE..."></td>
            </tr>

            <tr>
              <td><label>APELLIDO</label></td>
              <td><input type="text" name="apellido" placeholder="APELLIDO..."></td>
            </tr>

            <tr>
              <td><label>FECHA DE NACIMIENTO</label></td>
              <td><input type="text" name="telefono" placeholder="FECHA..."></td>
            </tr>

            <tr>
              <td><label>CORREO</label></td>
              <td><input type="text" name="correo" placeholder="CORREO..."></td>
            </tr>

            <tr>
              <td><label>CONTRASEÑA</label></td>
              <td><input type="text" data-role="calendarpicker" placeholder="CONTRASEÑA..."></td>
            </tr>

            <tr>
              <td class="boton-pg4"><a type="submit" class="btnCancelar" href="#">CANCELAR</a></td>
              <td class="boton-pg4"> <a type="submit" class="btnAceptar" href="#">ACEPTAR</a></td>
            </tr>

          </table>
          </form>
    </div>
</div>


    </section>


   <!--Servicios-->
   <section id="servicios"> 

    <div>

    <h1>Servicios</h1>

    <div class="ortodoncia">
        <h3>ORTODONCIA</h3>
        <img src="imagenes/ortodoncia.jpg" alt="ortodoncia">
    </div>

    <div class="limpieza">
        <h3>LIMPIEZA</h3>
        <img src="imagenes/limpieza.jpg" alt="limpieza">
    </div>

    <div class="extraccion">
        <h3>EXTRACCIÓN</h3>
        <img src="imagenes/extraccion.jpg" alt="extracción">
    </div>

    <button type="button">Agendar Cita</button>

</div>

   </section>

    <!--Ubicación-->
    <section id="ubicacion"> 

        <div>
            <h1>UBICACIÓN</h1>
            <p>123 Anywhere St., Any City, State, Country 12345</p>
            <img src="imagenes/mapa.png" alt="mapa">
        </div>

    </section>

  <!--Contacto-->
   <section id="contacto"> 


        <div>
        <h1>CONTACTO</h1>
          <div class="container1-pg7">

          <div class="div7">
          <i class="fa-solid fa-phone"></i>
            <h3>Teléfono</h3>
            <p>(+506) 1234 5678 </p>
          </div>
  
          <div class="div7">
          <i class="fa-solid fa-envelope"></i>
            <h3>Correo</h3>
            <p>clinica@mail.com</p>
          </div>
  
          <div class="div7">
          <i class="fa-brands fa-facebook-f"></i>
            <h3>Facebook</h3>
            <p>ClinicaCR</p>
          </div>

        </div>
      </div>

   </section>


</body>

</html>

