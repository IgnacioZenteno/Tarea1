<?php

include("conexion.php");
$conn=conectar();


$correo=$_POST['correo'];
$rut=$_POST['rut'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$direccion=$_POST['direccion'];
$edad=$_POST['edad'];
$fecha_nacimiento=$_POST['fecha_nacimiento'];

$sql="UPDATE usuarios SET  rut='$rut',nombre='$nombre',apellido='$apellido',direccion='$direccion',edad='$edad',fecha_nacimiento='$fecha_nacimiento' WHERE correo ='$correo'";

$query=mysqli_query($conn,$sql);

    if($query){
        Header("Location: usuario.php");
    }
?>
