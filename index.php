<!DOCTYPE html>
<html lang="es-ES">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-escale=1.0">
	<title>Inicio</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="icon" type="img\icons\v_logo.png" href="C:\AppServ\www\UDA\Tarea_1\img\icons\v_logo.png">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</head>

<body class="bg-light">
		
	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
	  <div class="container-xxl ">
	    <a class="navbar-brand" href="conexion.php"><img src="img/icons/logo.png" id="logo_m" class="rounded float-left" ></a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarCollapse">
	      <ul class="navbar-nav me-auto mb-2 mb-md-0">
	        <li class="nav-item"><a class="nav-link active " aria-current="page" href="index.php">Inicio</a></li>
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
		      <input class="form-control me-2 " type="search" placeholder="Buscar en Venpa.com" aria-label="Search">
		      <button class="btn btn-outline-success " type="submit">Buscar</button>
		    </form>
		    <li id="navlogin" class="navbar-nav mb-lg-0"><a class="nav-link" aria-current="page" href="login.php"><img src="img/icons/profile-user.png" id="icons_profile" class="rounded float me-2 " >Iniciar Sesión</a></li>
	    </div>
	  </div>
	</nav>

	<div id="carouselExampleControls" class="carousel slide container-xxl fotito" data-bs-ride="carousel">

	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img src="img/banner/banner.png" class="d-block w-100">
	    </div>
	    <div class="carousel-item">
	      <img src="img/banner/principal.png" class="d-block w-100">
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




	<main class="container">

  <div class="row mb-2">
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative bg">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary especial h1">OFERTA ESPECIAL</strong>
          <h4 class="mb-0">Traje de marciano</h4><br>
			    <p class="text-decoration-line-through text-po">Antes $24.990</p>
			    <p class="h5 text-po"> Ahora $12.490</p>
          <a href="#" class="stretched-link">IR AHORA</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img src="img/aside2.PNG" class="card-img-top img-info">
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative bg">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success especial h1 ">OFERTA ESPECIAL</strong>
          <h3 class="mb-0">Vestido de calabaza</h3><br>
          <p class="text-decoration-line-through text-po">Antes $6.990</p>
			    <p class="h5 text-po">Ahora $5.990</p>
          <a href="#" class="stretched-link">IR AHORA</a>
          <button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover" title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?">Click to toggle popover</button>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img src="img/aside1.PNG" class="card-img-top img-info" >

        </div>
      </div>
    </div>
  </div>

  <br>
  <div class="row g-5">
    <div class="col-md-8">

    	<div class="bg">
      <h3 class="pb-4 mb-4 fst-italic border-bottom especial h1">
        LLEGO HALLOWEEN
      </h3>

      <article class="blog-post">
        <h2 class="blog-post-title">Aprovecha esta oportunidad unica con nuestros productos <span class="icons-h fs-2 ">A</span></h2>

        
				<p class=" text">Más de 9.000 disfraces para Halloween, maquillaje y decoración para el Día de los Muertos y disfruta de un Halloween de miedo.<br>Los disfraces de Halloween más originales<br>En Disfrazzes siempre queremos que te lo pases bien y no importa como hacerlo. El cachondeo en Halloween siempre está de la mano del miedo, y no podemos dejarte marchar de nuestro templo del miedo sin que te lleves un disfraz de Halloween para asustar a todos tus compañeros, familiares y amigos. Disfraces halloween 2021 para adultos, niños y niñas!</p>

        </div>

    <div class="bg-secondary me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden fondo rounded">
      <div class="my-3 p-3">
        <h2 class="display-5 fs-3 especial">VE LO NUEVO EN VENPA, ESPECIAL DE TERROR <span class="icons-h fs-2"> Q</span></h2>
        <p class="lead fw-bold ">llegaron nuestros ultimos productos de miedo para disfrutar este halloween, no te lo pierdas </p>
      </div>
      <div class="bg-dark shadow-sm mx-auto" style="width: 100%; height: 300px; border-radius: 21px 21px 0 0;">
      	<iframe  src="https://www.youtube.com/embed/UCLnbCG73xE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>


    </div>

    <div class="col-md-4">
      <div class="position-sticky" style="top: 2rem;">
        <div class="p-4 mb-3 bg-light rounded bg">
          <h4 class="fst-italic">No te olvides de crear</h4>
          <p class="mb-0">Crea tu cuenta para poder optar a promociones unicas</p>
        </div>

         <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative bg">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success especial h1">OFERTA ESPECIAL</strong>
          <h3 class="mb-0">Vestido de calabaza</h3><br>
          <p class="text-decoration-line-through text-po">Antes $6.990</p>
			    <p class="h5 text-po">Ahora $5.990</p>
          <a href="#" class="stretched-link">IR AHORA</a>
        </div>
        <div class="col-auto d-none d-lg-block imgespecial">
          <img src="img/aside1.PNG" class="card-img-top img-info" >

        </div>
      </div>
 			
      </div>
    </div>
  </div>
</main>





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