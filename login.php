<?php
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-escale=1.0">
	<title>Iniciar Sesion</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="icon" type="img\icons\v_logo.png" href="C:\AppServ\www\UDA\Tarea_1\img\icons\v_logo.png">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	
</head>

<body class="bg-light ">

		<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
		  <div class="container-xxl">
		    <a class="navbar-brand" href="index.php"><img src="img/icons/logo.png" id="logo_m" class="rounded float-left"></a>
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
			    <li id="navlogin" class="navbar-nav mb-lg-0"><a class="nav-link active" aria-current="page" href="login.php"><img src="img/icons/profile-user.png" id="icons_profile" class="rounded float me-2 " >
			    <?php
  				$user = "Iniciar Sesión" ;

  				echo $user; ?>
  				</a></li>
		    </div>
		  </div>
		</nav>

		<div id="carouselExampleControls" class="carousel slide container-xxl fotito" data-bs-ride="carousel" >
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img src="img/banner/banner.png" class="d-block w-100" alt="HMTL5">
		    </div>
		    <div class="carousel-item">
		      <img src="img/banner/principal.png" class="d-block w-100" alt="HMTL5">
		    </div>
		  </div>
		  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="visually-hidden">Anterior</span>
		  </button>
		  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="visually-hidden">Siguiente</span>
		  </button>
		</div>

		<div id="form1" class="carousel slide container-xxl" data-bs-ride="carousel">
			<div class="form-signin border border-dark container-xxl form">
				<form action="login.php" method="post">
 
			    	<h1 class="h3 mb-3 fw-normal especial" >ACCEDER</h1>
			    	<p class="h3 mb-3 fw-normal fs-6">Usa Tu Cuenta De Venpa</p>
				    <div class="form-floating">
				      <input type="email" class="form-control" name="correo" placeholder="name@example.com" autofocus>
				      <label for="floatingInput">Dirección Email</label>
				    </div>
				    <div class="form-floating">
				      <input type="password" class="form-control" name="contrasena" placeholder="Password">
				      <label for="floatingPassword">Constraseña</label>
				    </div>
				    <div class="checkbox mb-3">
				      <label>
				        <input type="checkbox" value="remember-me"> Recuerdame
				      </label>
				    </div>
				    <p>¿Aun no tienes cuenta? <a href="signup.php">Regístrate</a></p>
				    <button id="btnLogin" class="w-100 btn btn-lg btn-primary" type="submit" value="send">Ingresar</button>
					
				</form>
			</div>
		</div>


		
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      
    
      
  </body>
	<div class="b-example-divider container-xxl"></div>
	<div class="container-xxl bg-dark" id="footer">
		<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
		  <div class="col-md-4 d-flex align-items-center ">
		  <span class="text-muted">&copy; 2021 Company, Inc</span>
		  </div>
	    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
	      <li class="ms-3"><p class="pfooter">Author: Ignacio Zenteno</p></li>
		    <li class="ms-3"><p class="pfooter"><a id="mail" href="mailto:hege@example.com">ignacio.zenteno.20@alumnos.uda.cl</a></p></li>
		  </ul>
	  </footer>
	</div>
	

</body>
</html>