<?php
	session_start();
  	require 'conexion.php';
	if (isset($_SESSION['user_id'])) {
	    header('Location: usuario.php');
	    $$GLOBALS['user_id'] = something;
	  }
  	if (!empty($_POST['correo']) && !empty($_POST['contrasena'])) {
    	$records = $conn->prepare('SELECT * FROM usuarios WHERE correo = :correo');
    	$records->bindParam(':correo', $_POST['correo']);
    	$records->execute();
    	$results = $records->fetch(PDO::FETCH_ASSOC);
   	 	$message = '';

    	if (count($results) > 0 && password_verify($_POST['contrasena'], $results['contrasena'])) {
      	$_SESSION['user_id'] = $results['id'];
      	header("Location: Inicio.php");
    	} else {
      	$message = 'Lo sentimos, la clave y/o el correo no son validos';
    	}
  	}
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-escale=1.0">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<title>Login</title>
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



		<div id="form1" class="carousel slide container-xxl " data-bs-ride="carousel">
			<div class="form-signin border border-dark container-xxl form bg-light ">
				<form action="index.php" method="POST">
 
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

		</tbody>
	</table>

	<?php include_once "include/footer.php"; ?>
</body>

</html>