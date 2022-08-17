<?php
$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];
session_start();
$_SESSION['usuario']=$usuario;

$connection = mysqli_connect("localhost","root","","clinicadentalbd");
$consulta="SELECT*FROM usuarios where usuario='$usuario' and contrasena='$contrasena'";
$resultado = mysqli_query($connection,$consulta);
$filas=mysqli_fetch_array($resultado);
if(isset($_COOKIE["block".$usuario])){
            ?>
            <?php
            include("login.php");
            ?>
            <h1 class="Bad">Usuario Bloqueado por 1 minuto</h1>
            <?php
    
}else{

    if($filas){
        header("location:paginaPrincipal.php");
    } else{
            ?>
            <?php
            include("login.php");
            ?>
            <h1 class="Bad">No existe usuario o contrasenna</h1>
            <?php

            if(isset($_COOKIE["$usuario"])){
                $cont = $_COOKIE["$usuario"];
                $cont++;
                setcookie($usuario, $cont,time()+120);
                if($cont >=3){
                    setcookie("block".$usuario, $cont,time()+60);

                }

            }else{
                setcookie($usuario,1,time()+120);
            }
        }
    }
    mysqli_free_result($resultado);
    mysqli_close($connection);
