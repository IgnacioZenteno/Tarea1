<?php
  session_start();
  require 'consultas/conexion.php';

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

  $message = '';

  if (!empty($_POST['correo']) && !empty($_POST['comentario'])) {
    $sql = "INSERT INTO consultas VALUES(:id,:correo,:nombre,:comentario)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $_POST['id']);
    $stmt->bindParam(':correo', $_POST['correo']);
    $stmt->bindParam(':nombre', $_POST['nombre']);    
    $stmt->bindParam(':comentario', $_POST['comentario']);    
    if ($stmt->execute()) {
      $message = 'Mensaje Enviado Correctamente';
    } else {
      $message = 'Lo Sentimos, Intente Enviar El Mensaje Nuevamente ';
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-escale=1.0">
	<title>Dudas o Consultas</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/fuente.css">
	<link rel="icon" type="img\icons\v_logo.png" href="C:\AppServ\www\UDA\Tarea_1\img\icons\v_logo.png">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>

<body class="bg-light">

		<?php include_once "include/header.php"; ?>
		<?php include_once "include/banner.php"; ?>

		<?php if(!empty($message)): ?>
	      <p> <?= $message ?></p>
	  <?php endif; ?>

	  <?php if(!empty($user)):?>
    <div class="carousel slide container-xxl " data-bs-ride="carousel">
			<div class="form-form border border-dark  form bg " >
				<h1 class="h3 mb-3 fw-normal especial">??TIENES ALGO QUE DECIRNOS?</h1>
				<p>A trav??s 	de este formulario te puedes comunicar con nuestros asistentes virtuales</p>
				<form class="row g-3" action="dudas.php" method="post">
					<?php if(!empty($user)):?>
            <div class="col-md-6 form-floating col">
				    	<input type="text" class="form-control " readonly placeholder="firstname" name="nombre" value="<?=$user['nombre']; ?> <?= $user['apellido']; ?>"  >
							<label for="floatingInput">Tu Nombre</label>
				  	</div>
				  	<div class="form-floating col-md-6 col">
				      <input type="email" class="form-control" readonly  placeholder="name@example.com" name="correo" value="<?=$user['correo']; ?>">
				      <label for="floatingInput">Tu Direcci??n Email</label>
				  	</div>          
          <?php else: ?>
             <div class="col-md-6 form-floating col">
				    	<input type="text" class="form-control "  placeholder="firstname" name="nombre"  >
							<label for="floatingInput">Tu Nombre</label>
				  	</div>
				  	<div class="form-floating col-md-6 col">
				      <input type="email" class="form-control" placeholder="name@example.com" name="correo" >
				      <label for="floatingInput">Tu Direcci??n Email</label>
				  	</div>           
          <?php endif; ?>					
				  <div class="form-floating col-md-12">
					  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="comentario"></textarea>
					  <label for="floatingTextarea">Escribenos Tu Comentario</label>
					</div>

					<div>
						<button type="submit" class=" w-25 btn btn btn-primary border-dark" value="send">Enviar</button>
          </div>
					
				</form>	
			</div>
		</div>
  <?php else: ?>
    <?php  Header("Location: /uda/tarea1"); ?>          
  <?php endif; ?>


		

	<?php include_once "include/footer.php"; ?>
</body>
</html>