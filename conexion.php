<?php

function conectar(){
	$server = "localhost";
	$user = "root";
	$pass = "admin123";
	$bd = "prueba";


	$con = mysqli_connect($server,$user,$pass);

	mysqli_select_db($con,$bd);
	return $con;

}



?>