<?php

include("conexion.php");
$conn=conectar();

$correo=$_GET['correo'];

$sql="DELETE FROM usuarios  WHERE correo='$correo'";
$query=mysqli_query($conn,$sql);

    if($query){
        Header("Location: logout.php");
    }
?>
