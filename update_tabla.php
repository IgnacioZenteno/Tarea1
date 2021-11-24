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
    $conexion=mysqli_connect('localhost','root','admin123','prueba');
    $correo=$_GET['correo'];

    $sql="SELECT * FROM usuarios WHERE correo='$correo'";
    $query=mysqli_query($conexion,$sql);
    $row=mysqli_fetch_array($query);
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
            <h1 class="h3 mb-1 fw-normal">Bienvenido <?= $row['nombre']; ?></h1>
            <h5 class="fw-normal mb-4">Aquí puedes actualizar tus datos personales</h5>

            <form class="row g-3" action="consultas/update_table.php" method="POST"> 
                <div class="col-md-12 form-floating col">
                    <input type="text" class="form-control " placeholder="firstname" name="correo" readonly value="<?=$row['correo'];?>">
                </div>
                <div class="col-md-6 form-floating col">
                    <input type="text" class="form-control "  placeholder="firstname" name="nombre" required value="<?=$row['nombre']; ?>">
                    <label for="floatingInput">Nombre</label>
                </div>
                <div class="col-md-6 form-floating col">
                    <input type="text" class="form-control"  placeholder="lastname" name="apellido" required value="<?=$row['apellido']; ?>">
                    <label for="floatingInput">Apellido</label>
                </div>
                <div class="col-md-12 form-floating col">
                    <input type="text" class="form-control" placeholder="dni" name="rut" required value="<?=$row['rut']; ?>">
                    <label for="floatingInput">Rut</label>
                    <p class="fs-7 mini-info">Por favor de ingresar el rut de la siguiente manera: "12.345.678-9"</p>
                </div>
                <div class=" col-md-12 form-floating  col">
                    <input type="text" class="form-control" placeholder="1234 Main St" name="direccion" required value="<?=$row['direccion']; ?>">
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
                            <?php if ($row['sexo']=='masculino'):?>
                                <input class="form-check-input" type="radio" name="sexo" id="gridRadios1" value="masculino" checked>
                            <?php else:?>
                                <input class="form-check-input" type="radio" name="sexo" id="gridRadios1" value="masculino">
                            <?php endif;?>
                            <label class="form-check-label" for="gridRadios1">Masculino</label>
                        </div>
                        <div class="form-check">
                            <?php if ($row['sexo']=='femenino'):?>
                                <input class="form-check-input" type="radio" name="sexo" id="gridRadios2" value="femenino" checked>
                            <?php else:?>
                                <input class="form-check-input" type="radio" name="sexo" id="gridRadios2" value="femenino">
                            <?php endif;?>    
                                <label class="form-check-label" for="gridRadios2">Femenino</label>
                        </div>
                        <div class="form-check">
                            <?php if ($row['sexo']=='otro'):?>
                                <input class="form-check-input" type="radio" name="sexo" id="gridRadios3" value="otro" checked >
                            <?php else:?>
                                <input class="form-check-input" type="radio" name="sexo" id="gridRadios3" value="otro">
                            <?php endif;?>
                            <label class="form-check-label" for="gridRadios3">Otros</label>
                        </div>
                    </div>
                </fieldset>
                  <div class=" col-md-6 form-floating col">
                    <input type="text" class="form-control" name="rol" value="<?=$row['rol'];?>">
                    <label for="floatingRol">rol</label>
                </div>
                <div>
                    <a href="lista_usuarios.php" class="btn btn-danger">Regresar</a>
                    <button type="submit" class=" w-auto btn btn btn-primary" >Guardar Cambios</button>
                </div>
            </form>         
        </div>
    </div>
    
        <?php else: ?>
        <?php  Header("Location: /uda/tarea1"); ?>           
        <?php endif; ?>

        

        <?php include_once "include/footer.php"; ?>
    </body>
     <script src='Js/Funciones.js'></script>
</html>
