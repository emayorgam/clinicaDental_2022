<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Clinica Dental</title>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Domine&family=Merriweather&family=Montserrat&display=swap" rel="stylesheet">

  <!-- CSS Stylesheets -->
  <link rel="stylesheet" href="css/styles.css">

  <!-- Font Awesome-->
  <script src="https://kit.fontawesome.com/1226f530d5.js" crossorigin="anonymous"></script>

  
</head>

<body>

    <!-- Página principal-->
  <section id="pagina-principal"> 
    <div>

        <nav>
            <div>
            <ul>
                <li class="nav-item">
                  <a class="nav-link" href="#ubicacion">Ubicación</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#servicios">Servicios</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#contacto">Contacto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#iniciar-sesion">Iniciar Sesión</a>
                    <a class="nav-link" href="#registrarse">Registrarse</a>
                </li>
              </ul>
            </div>
        </nav>

        <div>
            <h1>Clínica</h1>
            <button type="button">Agendar Cita</button>
            <img src="imagenes/clinica.jpg" alt="fondo-clinica">

        </div>
    </div>
  </section>

   <!-- Agendar cita-->
   <section id="agendar-cita"> 
    <div>
        <h1>Agendar Cita</h1>
    <div>
        <form action="/action_page.php">
            <label>Nombre</label>
            <input type="text" name="nombre" placeholder="Nombre...">
        
            <label>Apellido</label>
            <input type="text" name="apellido" placeholder="Apellido...">

            <label>Teléfono</label>
            <input type="text" name="telefono" placeholder="Teléfono...">

            <label>Correo</label>
            <input type="text" name="correo" placeholder="Correo...">
        
            <label>Servicio</label>
            <select name="servicio">
              <option value="seleccionar">Seleccionar...</option>
              <option value="ortodoncia">Ortodoncia</option>
              <option value="limpieza">Limpieza</option>
              <option value="extraccion">Extracción</option>
            </select>
          
            <button type="submit">Aceptar</button>
            <button type="submit">Cancelar</button>

          </form>
    </div>
</div>

   </section>

    <!-- Iniciar Sesión-->
    <section id="iniciar-sesion"> 
        <div>
            <h1>Iniciar Sesión</h1>
            <div>

                <form action="/action_page.php">
                    <label>Correo electrónico</label>
                    <input type="text" name="correo" placeholder="Correo electrónico...">
                
                    <label>Contraseña</label>
                    <input type="password" name="contrasena" placeholder="Contraseña...">  

                    <button type="submit">Ingresar</button>
                    <a href="#registrarse">Registrarse</a>
                </form> 

            </div>
        </div>
    </section>

    <!-- Registrarse-->
    <section id="registrarse">

        <div>
            <h1>Registrarse</h1>
        <div>
            <form action="/action_page.php">
                <label>Nombre</label>
                <input type="text" name="nombre" placeholder="Nombre...">
            
                <label>Apellido</label>
                <input type="text" name="apellido" placeholder="Apellido...">

                <label>Fecha de Nacimiento</label>
                <input type="date" name="nacimiento">

                <label>Correo</label>
                <input type="text" name="correo" placeholder="Correo...">

                <label>Contraseña</label>
                <input type="password" name="contrasena" placeholder="Contraseña...">
        
                <button type="submit">Aceptar</button>
                <button type="submit">Cancelar</button>

              </form>
        </div>
    </div>


    </section>


   <!-- Servicios-->
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

    <!-- Ubicación-->
    <section id="ubicacion"> 

        <div>
            <h1>Ubicación</h1>
            <p>123 Anywhere St., Any City, State, Country 12345</p>
            <img src="imagenes/mapa.png" alt="mapa">
        </div>

    </section>

   <!-- Contacto-->
   <section id="contacto"> 


        <div>
        <h1>Contacto</h1>
          <div">
          <i class="fa-solid fa-phone"></i>
            <h3>Teléfono</h3>
            <p>(+506) 1234 5678 </p>
          </div>
  
          <div">
          <i class="fa-solid fa-envelope"></i>
            <h3>Correo</h3>
            <p>clinica@mail.com</p>
          </div>
  
          <div">
          <i class="fa-brands fa-facebook-f"></i>
            <h3>Facebook</h3>
            <p>ClinicaCR</p>
          </div>
        </div>

   </section>


</body>

</html>
