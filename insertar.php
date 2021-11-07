<?php
include("conexion.php");

$con=conectar();

$id=$_POST['id'];
$correo=$_POST['correo'];
$rut=$_POST['rut'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$direccion=$_POST['direccion'];
$fecha_nacimiento=$_POST['fecha_nacimiento'];
$edad=$_POST['edad'];
$sexo=$_POST['sexo'];
$contrasena=password_hash($_POST['password'], PASSWORD_BCRYPT);
 

$sql="INSERT INTO usuarios VALUES('$id','$correo','$rut','$nombre','$apellido','$direccion','$fecha_nacimiento','$edad','$sexo','$contrasena')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
}else {
    echo "No pudo ser creada la cuenta";
    Header("Location: signup.php");
}
?>