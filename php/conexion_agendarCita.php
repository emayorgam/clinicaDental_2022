<?php
    $nombre       =   $_POST['nombre'];
    $apellidos   =   $_POST['apellidos'];
    $telefono      =   $_POST['telefono'];
    $correo       =   $_POST['correo'];
    $servicio   =   $_POST['servicio'];
    $fecha   =   $_POST['fecha'];
    $hora   =   $_POST['hora'];


    

    $conn = new mysqli('localhost', 'root', '', 'clinicadentalbd');
    if($conn->connect_error){
        die('Connection Failed: ' .$conn->connect_error);
    }else{
        $stmt = $conn -> prepare("insert into citas(nombre, apellidos, telefono, correo, servicio, fecha, hora)
        values(?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssss",$nombre,$apellidos,$telefono,$correo,$servicio,$fecha,$hora);
        $stmt->execute();
        echo "registration successfully";
        $stmt->close();
        $conn->close();
        header("location:../PHP/paginaPrincipal.php");
    }

?>