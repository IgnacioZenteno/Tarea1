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



<!doctype html>
<html class="no-js" lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-escale=1.0">
	<link rel="stylesheet" type="text/css" href="styles.css">
  <title>Venpa - Tienda de venta de ropa online</title>
	<link rel="icon" type="img\icons\v_logo.png" href="C:\AppServ\www\UDA\Tarea_1\img\icons\v_logo.png">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>

<body >

	 <?php include_once "include/header.php"; ?>
	<?php include_once "include/banner.php"; ?>


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
	<?php include_once "include/footer.php"; ?>

</body>
</html>