<?php
  session_start();
  require 'conexion.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT * FROM usuarios WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }
?>

<!DOCTYPE html>
<html lang="es-ES">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-escale=1.0">
	<title>Conoce quienes somos y que tenemos para ti</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body class="bg-light">
	<?php include_once "include/header.php"; ?>
	<?php include_once "include/banner.php"; ?>


	<div class="carousel slide container-xxl " data-bs-ride="carousel">
		<div class="form-info form-control border border-dark  form bg" >
			<h1 class="h1 mb-3 fw-normal especial">¿QUIENES SOMOS?</h1>
			<p class="text">Bienvenido a Fenda, podras encontrar ropa de toda epoca del año, disfraces y accesorios de belleza. Estamos dedicados a brindarte la mejor experiencia de compra.<br>Como sabemos que deseas todo tipo de producto de alto valor, te tenemos cubierto de proovedores de producción altamente profesionales con los que nos mantenemos en estrecho contacto y revisamos diariamente para que cumplan con nuestro intenso proceso de selección.<br>Es por eso que en Fenda encontrarás una colección de alto valor para cada estación del año<br>Entonces lo que sea que esté buscando, planeamos tenerlo acá para ti. Y si no es así, contáctanos y avísanos para que podamos negociar o producir el mejor trato para ti en poco timpo. Estamos y nos gustaría estar aquí para ti toda la vida.<br>	
			</p>
		</div>
	</div>

	<div  class="carousel slide container-xxl form-info " data-bs-ride="carousel" >
			<form class="row g-3 ">					
				<div class=" col-md-3 card border border-dark mini-img form-floating col me-auto ">
			  		<img src="img/aside1.PNG" class="card-img-top img-info" alt="HMTL5">
			  		<div class="card-body bg">
			    		<h5 class="card-title">Vestido de calabaza</h5>
			    		<p class="card-text">Por Venpa</p>
			    		<p class="text-decoration-line-through text-po">$10.990</p>
			    		<p class="h5 text-po">$8.990</p>
				    	<a href="#" class="btn btn-primary">IR AHORA</a>
			  		</div>
				</div>
				<div class=" col-md-3 card border border-dark mini-img form-floating col me-auto">
			  		<img src="img/aside2.PNG" class="card-img-top img-info" alt="HMTL5">
			  		<div class="card-body bg">
			    		<h5 class="card-title">Traje de marcianito</h5>
			    		<p class="card-text">Por Venpa</p>
			    		<p class="text-decoration-line-through text-po">$24.990</p>
			    		<p class="h5 text-po">$12.990</p>
				    	<a href="#" class="btn btn-primary">IR AHORA</a>
			  		</div>
				</div>
				<div class=" col-md-3 card border border-dark mini-img form-floating col me-auto">
			  		<img src="img/aside3.PNG" class="card-img-top img-info" alt="HMTL5">
			  		<div class="card-body bg">
			    		<h5 class="card-title">Vestido de calabaza</h5>
			    		<p class="card-text">Por Venpa</p>
			    		<p class="text-decoration-line-through text-po">$6.990</p>
			    		<p class="h5 text-po">$5.990</p>
				    	<a href="#" class="btn btn-primary">IR AHORA</a>
			  		</div>
				</div>
			</form>   
		</div>


		<div class="form-info bg container-xl rounded">
			<h1 class="h1 especial">¿DONDE PUEDES ENCONTRARNOS?</h1>
			<p style=";text-align: center;">Nuestra tienda fisica se encuentra ubicada en <strong> Av. Henríquez #523, Copiapó, Atacama</strong></p>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d885.7919852692258!2d-70.32595850044716!3d-27.370470068304908!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x969805f7c70f09cb%3A0xac6698478c66c1eb!2sUnimarc!5e0!3m2!1ses!2scl!4v1633403969334!5m2!1ses!2scl" width="600" height="225" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		</div>


	<?php include_once "include/footer.php"; ?>
</body>