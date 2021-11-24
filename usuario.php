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

 
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Datos de Usuario</title>
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        <link rel="stylesheet" type="text/css" href="css/fuente.css">
        <link rel="icon" type="img/icons/v_logo.png" href="C:\AppServ\www\UDA\Tarea_1\img\icons\v_logo.png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="Js/jquery-3.4.1.min.Js"></script>
        
    </head>

    <body >

    <?php include_once "include/header.php"; ?> 
    <?php if(!empty($user)):?>
        <?php if(!empty($message)): ?>
            <p> <?= $message ?></p>
        <?php endif; ?>

    <div  class="carousel slide container-fluid  " data-bs-ride="carousel" style="margin-top: 20px;">
        <div class="form-signup form-control border border-dark  form bg-light" >
            <h1 class="h3 mb-1 fw-normal">Bienvenido <?= $user['nombre']; ?></h1>
            <h5 class="fw-normal mb-4">Aquí puedes actualizar tus datos personales</h5>

            <form class="row g-3" action="consultas/update.php" method="POST"> 
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
                    <input type="text" class="form-control" placeholder="1234 Main St" name="direccion" required value="<?=$user['direccion']; ?>">
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
               

                <fieldset class="row " style="margin-top: 20px;">
                    <legend class="col-form-label col-sm-2 pt-0">Sexo</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <?php if ($user['sexo']=='masculino'):?>
                                    <input class="form-check-input" type="radio" name="sexo" id="gridRadios1" value="masculino" checked>
                                <?php else:?>
                                    <input class="form-check-input" type="radio" name="sexo" id="gridRadios1" value="masculino">
                                <?php endif;?>
                                <label class="form-check-label" for="gridRadios1">Masculino</label>
                            </div>
                            <div class="form-check">
                                <?php if ($user['sexo']=='femenino'):?>
                                    <input class="form-check-input" type="radio" name="sexo" id="gridRadios2" value="femenino" checked>
                                <?php else:?>
                                    <input class="form-check-input" type="radio" name="sexo" id="gridRadios2" value="femenino">
                                <?php endif;?>    
                                    <label class="form-check-label" for="gridRadios2">Femenino</label>
                            </div>
                            <div class="form-check">
                                <?php if ($user['sexo']=='otro'):?>
                                    <input class="form-check-input" type="radio" name="sexo" id="gridRadios3" value="otro"checked >
                                <?php else:?>
                                    <input class="form-check-input" type="radio" name="sexo" id="gridRadios3" value="otro">
                                <?php endif;?>
                                    
                                <label class="form-check-label" for="gridRadios3">Otros</label>
                            </div>
                        </div>
                    </fieldset>
                    <div class=" col-md-6 form-floating col mb-3" >
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="contrasena" required >
                        <label for="floatingPassword">Constraseña</label>
                    </div>
                    <div class=" col-md-6 form-floating col">
                        <input type="password" class="form-control" id="floatingPasswordc" placeholder="Password" name="confir_contrasena" required> 
                        <label for="floatingPassword">Confirmación</label>
                    </div>
                    <div>
                        <a href="consultas/delete.php?correo=<?php echo $user['correo'] ?>" class="btn btn-danger">Eliminar</a>
                        <button type="submit" class=" w-auto btn btn btn-primary" >Guardar Cambios</button>
                    </div>
                </form>         
            </div>
        </div>
    <?php if ($user['rol']=='Admin'):?>
        <div class="form-signup form-control border border-dark  form bg-light">
        <h1 class="h3 mb-1 fw-normal">Bienvenido Admin</h1>
        <p>En el siguiente botón podra ver la lista de todos los usuarios</p> 
        <a href="lista_usuarios.php" class="btn btn-info mb-3">Lista de Usuarios</a>
    </div>                        
    <?php endif;?>
    
    <?php else: ?>
    <?php  Header("Location: /uda/tarea1"); ?>           
    <?php endif; ?>

        

        <?php include_once "include/footer.php"; ?>
    </body>
    <script src='Js/Funciones.js'></script>
</html>

 