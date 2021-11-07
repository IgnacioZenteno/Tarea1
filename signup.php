<?php
	include("conexion.php");
	$con=conectar();

	$sql="SELECT * FROM usuarios";

    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-escale=1.0">
	<title>Formulario Datos Adicionales</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="icon" type="img\icons\v_logo.png" href="C:\AppServ\www\UDA\Tarea_1\img\icons\v_logo.png">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body class="bg-light ">
	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
		  <div class="container-xxl">
		    <a class="navbar-brand" href="index.php"><img src="img/icons/logo.png" id="logo_m" class="rounded float-left" ></a>
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="collapse navbar-collapse" id="navbarCollapse">
		      <ul class="navbar-nav me-auto mb-2 mb-md-0">
		        <li class="nav-item"><a class="nav-link " aria-current="page" href="index.php">Inicio</a></li>
		        <li class="nav-item"><a class="nav-link" href="dudas.php">¿Tienes Dudas?</a></li>
		        <li class="nav-item dropdown">
			          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
			            Conócenos</a>
			          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
			            <li><a class="dropdown-item" href="acerca-de-nosotros.php">¿Quiénes Somos?</a></li>
			            <li><hr class="dropdown-divider"></li>
			            <li><a class="dropdown-item" href="#contacto">Contacto</a></li>
			          </ul>
			        </li>
		      </ul>
		      <form class="d-flex me-auto">
			      <input class="form-control me-2" type="search" placeholder="Buscar en Venpa.com" aria-label="Search">
			      <button class="btn btn-outline-success" type="submit">Buscar</button>
			    </form>
			    <li id="navlogin" class="navbar-nav mb-lg-0"><a class="nav-link active" aria-current="page" href="login.php"><img src="img/icons/profile-user.png" id="icons_profile" class="rounded float me-2 ">Iniciar Sesión</a></li>
		    </div>
		  </div>
		</nav>
	


	<div  class="carousel slide container-fluid  " data-bs-ride="carousel">
			<div class="form-signup form-control border border-dark  form " >
				<h1 class="h3 mb-3 fw-normal especial">REGISTRATE</h1>
				<form class="row g-3" action="insertar.php" method="POST">			
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
					      	<input type="number" class="form-control" min="0" max="120" name="edad" required>
					      	<label for="floatingPassword">Edad</label>
					    </div>
					    <div class=" col-md-6 form-floating col">
					      	<input type="date" class="form-control" name="fecha_nacimiento" required >
					      	<label for="floatingPassword">Fecha de Nacimiento</label>
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
						<a class="col-md-6 w-50 pin fw-bold" href="login.php#floatingInput">Prefiero Iniciar Sesion</a>
						<button type="submit" class=" w-50 btn btn btn-primary" >Guardar</button>
				
				</form>			
			</div>
		</div>

	<table class="table">
		<thead class="table-success table-striped">
			<th>Correo</th>
			<th>Rut</th>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Direccion</th>
			<th>Edad</th>
			<th>Fecha de nacimiento</th>
			<th>Sexo</th>
			<th>      </th>
			<th>       </th>
		</thead>
		<tbody>
			<?php
                while($row=mysqli_fetch_array($query)){
            ?>
            <tr>
                <th><?php  echo $row['correo']?></th>
                <th><?php  echo $row['rut']?></th>
                <th><?php  echo $row['nombre']?></th>
                <th><?php  echo $row['apellido']?></th>
                <th><?php  echo $row['direccion']?></th> 
                <th><?php  echo $row['edad']?></th>  
                <th><?php  echo $row['fecha_nacimiento']?></th>
                <th><?php  echo $row['sexo']?></th>     
                <th><a href="actualizar.php?id=<?php echo $row['cod_estudiante'] ?>" class="btn btn-info">Editar</a></th>
                <th><a href="delete.php?id=<?php echo $row['cod_estudiante'] ?>" class="btn btn-danger">Eliminar</a></th>        
            	</tr>
                <?php 
				}
             ?>
		</tbody>
	</table>
										
	<div class="b-example-divider container-xxl"></div>
	<div class="container-xxl bg-dark" id="footer">
		<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
		  <div class="col-md-4 d-flex align-items-center ">
		  <span class="text-muted">&copy; 2021 Company, Inc</span>
		  </div>
	    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
  	    <li class="ms-3"><h5 id="contacto"> Contacto</h5></li>
	      <li class="ms-3"><p class="pfooter">Author: Ignacio Zenteno</p></li>
		    <li class="ms-3"><p class="pfooter"><a id="mail" href="mailto:hege@example.com">ignacio.zenteno.20@alumnos.uda.cl</a></p></li>
		  </ul>
	  </footer>
	</div>

</body>
</html>