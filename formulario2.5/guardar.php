<?php

    include("abrir.php");

    $nombre    = $_POST['nombre'];
    $apellido    = $_POST['apellido'];
    $email    = $_POST['email'];

    $consulta = "INSERT INTO empleados(nombre, apellido, email)  VALUES
        ('$nombre','$apellido', '$email')";


       if ($conexion->query($consulta) === TRUE){
    /*    header("Location: index.php");*/
}else{
    echo "Error: " . $consulta . "<br>" . $conexion->error;
    }
    $conexion->close();

?>    