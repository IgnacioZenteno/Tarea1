<?php
$conexion=mysqli_connect('localhost','root','admin123','prueba');

$correo=$_GET['correo'];

$sql="DELETE FROM usuarios  WHERE correo='$correo'";
$query=mysqli_query($conexion,$sql);

    if($query){
        Header("Location: ../lista_usuarios.php");
    }
?>



