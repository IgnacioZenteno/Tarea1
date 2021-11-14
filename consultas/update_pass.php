<?php
    require 'conexion.php';

    $correo=$_POST['correo'];
    $contrasena = password_hash($_POST['contrasena'], PASSWORD_BCRYPT);

    $sql=$conn->prepare("UPDATE usuarios SET  contrasena='$contrasena' WHERE correo ='$correo'");

    $sql->execute();

        if($sql){

            Header("Location: ../index.php");
        }
?>

