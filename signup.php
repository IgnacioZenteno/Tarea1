<?php

  require 'consultas/conexion.php';

  $message = '';

  if (!empty($_POST['correo']) && !empty($_POST['contrasena'])) {
    $sql = "INSERT INTO usuarios VALUES(:id,:correo,:rut,:nombre,:apellido,:direccion,:fecha_nacimiento,:edad,:sexo,:contrasena,:rol)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $_POST['id']);
    $stmt->bindParam(':correo', $_POST['correo']);
    $stmt->bindParam(':rut', $_POST['rut']);
    $stmt->bindParam(':nombre', $_POST['nombre']);
    $stmt->bindParam(':apellido', $_POST['apellido']);
    $stmt->bindParam(':direccion', $_POST['direccion']);
    $stmt->bindParam(':fecha_nacimiento', $_POST['fecha_nacimiento']);
    $stmt->bindParam(':edad', $_POST['edad']);
    $stmt->bindParam(':sexo', $_POST['sexo']);
    $contrasena = password_hash($_POST['contrasena'], PASSWORD_BCRYPT);
    $stmt->bindParam(':contrasena', $contrasena);
    $stmt->bindParam(':rol', $_POST[null]);

    if ($stmt->execute()) {
      $message = 'Usuario Creado Correctamente';
    } else {
      $message = 'Lo Sentimos, Su Cuenta No Pudo Ser Creada ';
    }
  }



?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-escale=1.0">
	<title>Formulario Datos Adicionales</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/fuente.css">
	<link rel="icon" type="img\icons\v_logo.png" href="C:\AppServ\www\UDA\Tarea_1\img\icons\v_logo.png">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

	 	<script src="Js/jquery-3.4.1.min.Js"></script>
</head>

<body class="bg-light ">
	<?php include_once "include/header.php"; ?>
	
	<?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>
	<div  class="carousel slide container-fluid  " data-bs-ride="carousel" style="margin-top: 20px;">
			<div class="form-signup form-control border border-dark  form " >
				<h1 class="h3 mb-3 fw-normal especial">REGISTRATE</h1>
				<form class="row g-3" action="signup.php" method="POST">			
						<div class="col-md-6 form-floating col">
					    	<input type="text" class="form-control " id="floatingInputF" placeholder="firstname" name="nombre" required>
							<label for="floatingInput">Nombre</label>
					  	</div>
					  	<div class="col-md-6 form-floating col">
					    	<input type="text" class="form-control" id="floatingInputL" placeholder="lastname" name="apellido" required>
						 	<label for="floatingInput">Apellido</label>
					  	</div>
					  	<div class="col-md-12 form-floating col">
					    	<input type="text" class="form-control" placeholder="dni" name="rut" required>
						 	<label for="floatingInput">Rut</label>
						 	<p class="fs-7 mini-info">Por favor de ingresar el rut de la siguiente manera: "12.345.678-9"</p>
					  	</div>
					  	<div class="form-floating col-md-12 col">
					      	<input type="email" class="form-control" id="floatingInputM" placeholder="name@example.com" name="correo" required>
					      	<label for="floatingInput">Dirección Email</label>
					      	<p class="fs-7 mini-info">Puedes utilizar letras, números y puntos</p>
					    </div>	
					  	<div class=" col-md-6 form-floating col">
					      	<input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="contrasena" required>
					      	<label for="floatingPassword">Constraseña</label>
					    </div>
					    <div class=" col-md-6 form-floating col">
					      	<input type="password" class="form-control" id="floatingPasswordc" placeholder="Password" name="confir_contrasena" required> 
					      	<label for="floatingPassword">Confirmación</label>
					    </div>

					     <div class=" col-md-12 form-floating  col">
					      	<input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="direccion" required>
					      	<label for="floatingPassword">Dirección</label>
					    </div>
					   <div class=" col-md-6 form-floating col">
                   <input type="date" class="form-control" id="fecha"  name="fecha_nacimiento" required >
                    <label for="floatingPassword">Fecha de Nacimiento</label>
                </div>
                <div class=" col-md-6 form-floating col">
                    <input type="text" class="form-control" min="0" max="120" name="edad" id="edad" readonly="">
                    <label for="floatingPassword">Edad</label>
                </div>

					    
					    <fieldset class="row mb-3" style="margin-top: 20px;">
			    			<legend class="col-form-label col-sm-2 pt-0">Sexo</legend>
						    <div class="col-sm-10">
						      	<div class="form-check">
						        	<input class="form-check-input" type="radio" name="sexo" id="gridRadios1" value="masculino" checked>
						        	<label class="form-check-label" for="gridRadios1">Masculino</label>
						      	</div>
						      	<div class="form-check">
						        	<input class="form-check-input" type="radio" name="sexo" id="gridRadios2" value="femenino">
						        	<label class="form-check-label" for="gridRadios2">Femenino</label>
						      	</div>
						      	<div class="form-check">
						        	<input class="form-check-input" type="radio" name="sexo" id="gridRadios3" value="otro">
						        	<label class="form-check-label" for="gridRadios3">Otros</label>
						      	</div>
						    </div>
						</fieldset>
						<a class="col-md-6 w-50 pin fw-bold" href="index.php#floatingInput">Prefiero Iniciar Sesion</a>
						<button type="submit" class=" w-50 btn btn btn-primary" >Guardar</button>
				
				</form>			
			</div>
		</div>
										
	<?php include_once "include/footer.php"; ?>

</body>
<script src='Js/Funciones.js'></script>
</html>