<?php
	session_start();
  	require 'consultas/conexion.php';
	if (isset($_SESSION['user_id'])) {
	    header('Location: usuario.php');
	    $$GLOBALS['user_id'] = something;
	  }
  	if (!empty($_POST['correo']) && !empty($_POST['nombre'])) {
    	$records = $conn->prepare('SELECT * FROM usuarios WHERE correo = :correo');
    	$records->bindParam(':correo', $_POST['correo']);
    	$records->execute();
    	$results = $records->fetch(PDO::FETCH_ASSOC);
   	 	$message = '';
   	 	$Rpass = '';
    	if (count($results) > 0 && ($_POST['nombre'] == $results['nombre'])) {
      		$message = 'Ingrese su nueva contraseña';
      		$Rpass = 'si';
      		$mail=$_POST['correo'];
    	} else {
      		$message = 'Lo sentimos, El correo y/o el nombre no son validos';
      		$Rpass = 'no';
    	}
  	}


    $conexion=mysqli_connect('localhost','root','admin123','prueba');
  	if (!empty($_POST['contrasena'])) {

  		$sql="UPDATE usuarios SET contrasena='$contrasena'  WHERE correo='$correo'";
		$query=mysqli_query($conexion,$sql);

		if($query){
			$Rpass= 'no';
			$message = 'Contraseña Actualizada';
    	}else{
    		$message = 'No FuNKA';
    	}
  		
  	}



?>

<!doctype html>
<html class="no-js" lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-escale=1.0">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/fuente.css">
	<title>Recuperar Contraseña</title>
	<link rel="icon" type="img\icons\v_logo.png" href="C:\AppServ\www\UDA\Tarea_1\img\icons\v_logo.png">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	
</head>

<body >
	<?php include_once "include/header.php"; ?>
	<?php include_once "include/banner.php"; ?>

	<?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

		

		<?php if($Rpass=='si'): ?>
		<div id="form1" class="carousel slide container-xxl " data-bs-ride="carousel">
			<div class="form-signin border border-dark container-xxl form bg-light ">
					
					<form action="consultas/update_pass.php" method="POST">	
						<div>
							<input type="email" class="form-control" name="correo" value="<?=$mail;?>" placeholder="name@example.com" readonly>
						</div>			
            			<div class=" form-floating mb-3">
					      	<input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="contrasena" required autofocus>
					      	<label for="floatingPassword" >Nueva Constraseña</label>
					    </div>
					     <div>
					    	<a href="index.php" class="btn btn-danger">Regresar</a>
					   	 	<button  class="w-auto btn btn btn-primary" type="submit" value="send">Actualizar</button>
					    </div>
					    
					</form>
			</div>
		</div>	
		<?php else: ?>
			<div id="form1" class="carousel slide container-xxl " data-bs-ride="carousel">
			<div class=" form-signin border border-dark container-xxl form bg-light ">
				<form action="recuperar_pass.php" method="POST">
 
			    	<h1 class="h3 mb-3 fw-normal especial" >RECUPERAR CLAVE</h1>
			    	<p class="h3 mb-3 fw-normal fs-6">Ingresa Tu Dirección Email Y Nombre</p>
				    <div class="form-floating">
				      	<input type="email" class="form-control" name="correo" placeholder="name@example.com" autofocus>
				    	<label for="floatingInput">Dirección Email</label>
				    </div>
				    <div class="form-floating mb-3">
				      	<input type="text" class="form-control" name="nombre" placeholder="Nombre">
				      	<label for="floating">Nombre</label>
				    </div> 
				    <div>
				    	<a href="index.php" class="btn btn-danger">Regresar</a>
				   	 	<button  class="w-auto btn btn btn-primary" type="submit" value="send">Recuperar</button>
				    </div>
				</form>
			</div>
		</div>
		<?php endif; ?>

		
	<?php include_once "include/footer.php"; ?>
</body>

</html>