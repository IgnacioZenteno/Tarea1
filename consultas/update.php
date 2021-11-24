<?php
    require 'conexion.php';

    $correo=$_POST['correo'];
    $rut=$_POST['rut'];
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $direccion=$_POST['direccion'];
    $edad=$_POST['edad'];
    $fecha_nacimiento=$_POST['fecha_nacimiento'];
    $sexo=$_POST['sexo'];

    $sql=$conn->prepare("UPDATE usuarios SET  rut='$rut',nombre='$nombre',apellido='$apellido',direccion='$direccion',edad='$edad',fecha_nacimiento='$fecha_nacimiento' ,sexo='$sexo' WHERE correo ='$correo'");

    $sql->execute();

        if($sql){
            Header("Location: ../usuario.php");
        }
?>


