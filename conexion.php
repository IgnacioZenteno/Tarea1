<?php
	function conectar(){
	   	$server = "localhost";
		$username = "root";
		$password = "admin123";
		$database = "prueba";


	    $conn=mysqli_connect($server,$username,$password);

	    mysqli_select_db($conn,$database);

	    return $conn;
	}
	
	$server = "localhost";
	$username = "root";
	$password = "admin123";
	$database = "prueba";


	try {
	  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
	} catch (PDOException $e) {
	  die('Connection Failed: ' . $e->getMessage());
	}

	
?>
