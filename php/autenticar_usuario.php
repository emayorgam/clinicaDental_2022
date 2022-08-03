<?php
$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];
session_start();
$_SESSION['usuario']=$usuario;

$connection = mysqli_connect("localhost","root","","clinicadentalbd");
$consulta="SELECT*FROM usuarios where usuario='$usuario' and contrasena='$contrasena'";
$resultado = mysqli_query($connection,$consulta);
$filas=mysqli_fetch_array($resultado);

if($filas){
    header("location:paginaPrincipal.php");
} else{
        ?>
        <?php
        include("login.php");
        ?>
        <h1 class="Bad">No existe usuario o contrasenna</h1>
        <?php
    }
    mysqli_free_result($resultado);
    mysqli_close($connection);
