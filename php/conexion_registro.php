<?php
    $cedula       =   $_POST['cedula'];
    $nombre       =   $_POST['nombre'];
    $apellido_1   =   $_POST['apellido_1'];
    $apellido_2   =   $_POST['apellido_2'];
    $usuario      =   $_POST['usuario'];
    $correo       =   $_POST['correo'];
    $contrasena   =   $_POST['contrasena'];
    

    $conn = new mysqli('localhost', 'root', '', 'clinicadentalbd');
    if($conn->connect_error){
        die('Connection Failed: ' .$conn->connect_error);
    }else{
        $stmt = $conn -> prepare("insert into usuarios(cedula, nombre, apellido_1, apellido_2, usuario, correo, contrasena)
        values(?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssss",$cedula,$nombre,$apellido_1,$apellido_2,$usuario,$correo,$contrasena);
        $stmt->execute();
        echo "registration successfully";
        $stmt->close();
        $conn->close();
        header("location:../PHP/login.php");
    }

?>