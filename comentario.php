<?php
include("conexion.php");

$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$comentario=$_POST['comentario'];

 

$sql="INSERT INTO consultas VALUES('$id','$nombre','$correo','$comentario')";
$query= mysqli_query($con,$sql);

if($query){
    
    Header("Location: dudas.php");
}else {
    echo "Intenta nuevamente";
    Header("Location: dudas.php");
}
?>