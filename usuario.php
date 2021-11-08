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
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Datos de Usuario</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
        <link rel="icon" type="img/icons/v_logo.png" href="C:\AppServ\www\UDA\Tarea_1\img\icons\v_logo.png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        
    </head>

    <body >
        <?php include_once "include/header.php"; ?> 

        <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>
       <div  class="carousel slide container-fluid  " data-bs-ride="carousel" style="margin-top: 20px;">
            <div class="form-signup form-control border border-dark  form bg-light" >
                <h1 class="h3 mb-3 fw-normal">Bienvenido <?= $user['nombre']; ?></h1>
                <h5 class="fw-normal">Aquí puedes actualizar tus datos personales</h5>
                <br>
                <form class="row g-3" action="update.php" method="POST"> 
                        <div class="col-md-12 form-floating col">
                            <input type="text" class="form-control " id="floatingInputF" placeholder="firstname" name="correo" readonly value="<?=$user['correo'];?>">
                            
                        </div>
                        <div class="col-md-6 form-floating col">
                            <input type="text" class="form-control " id="floatingInputF" placeholder="firstname" name="nombre" required value="<?=$user['nombre']; ?>">
                            <label for="floatingInput">Nombre</label>
                        </div>
                        <div class="col-md-6 form-floating col">
                            <input type="text" class="form-control" id="floatingInputL" placeholder="lastname" name="apellido" required value="<?=$user['apellido']; ?>">
                            <label for="floatingInput">Apellido</label>
                        </div>
                        <div class="col-md-12 form-floating col">
                            <input type="text" class="form-control" placeholder="dni" name="rut" required value="<?=$user['rut']; ?>">
                            <label for="floatingInput">Rut</label>
                            <p class="fs-7 mini-info">Por favor de ingresar el rut de la siguiente manera: "12.345.678-9"</p>
                        </div>
                         <div class=" col-md-12 form-floating  col">
                            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="direccion" required value="<?=$user['direccion']; ?>">
                            <label for="floatingPassword">Dirección</label>
                        </div>
                        <div class=" col-md-6 form-floating col">
                            <input type="text" class="form-control" min="0" max="120" name="edad" required value="<?=$user['edad']; ?>">
                            <label for="floatingPassword">Edad</label>
                        </div>
                        <div class=" col-md-6 form-floating col">
                            <input type="text" class="form-control" name="fecha_nacimiento" required  value="<?=$user['fecha_nacimiento'];?>">
                            <label for="floatingPassword">Fecha de Nacimiento</label>
                        </div>

                        <div class=" col-md-6 form-floating col" >
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="contrasena" required >
                            <label for="floatingPassword">Constraseña</label>
                        </div>
                        <div class=" col-md-6 form-floating col">
                            <input type="password" class="form-control" id="floatingPasswordc" placeholder="Password" name="confir_contrasena" required> 
                            <label for="floatingPassword">Confirmación</label>
                        </div>
                        
                        <div>
                            <button type="submit" class=" w-auto btn btn btn-primary" >Guardar Cambios</button>
                        </div>
                        
                </form>         
            </div>
        </div>

        <?php include_once "include/footer.php"; ?>
    </body>
</html>

 