<?php
    require 'conexion.php';

    $correo=$_POST['correo'];
    $rut=$_POST['rut'];
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $direccion=$_POST['direccion'];
    $fecha_nacimiento=$_POST['fecha_nacimiento'];
    $edad=$_POST['edad'];
    $rol=$_POST['rol'];
    $sexo=$_POST['sexo'];

    $sql=$conn->prepare("UPDATE usuarios SET  rut='$rut',nombre='$nombre',apellido='$apellido',direccion='$direccion',fecha_nacimiento='$fecha_nacimiento', rol='$rol',edad='$edad',sexo='$sexo' WHERE correo ='$correo'");

    $sql->execute();

        if($sql){

            Header("Location: ../lista_usuarios.php");
        }
?>


