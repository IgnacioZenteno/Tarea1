<?php
    require 'conexion.php';
    $correo=$_GET['correo'];

    $records = $conn->prepare("DELETE FROM usuarios  WHERE correo='$correo'");
    $records->execute();
    Header("Location: ../logout.php");
  }
?>

