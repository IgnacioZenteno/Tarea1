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
    $conn=conectar();

    $sql="SELECT *  FROM usuarios ORDER BY 'nombre' ASC";
    $query=mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Lista de Usuarios</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="styles.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    
        
    </head>
    <body>

        <?php include_once "include/header.php"; ?>
        <?php if ($user['rol']=='Admin'):?>
            <div class="container-xxl form bg-light">
                <h1 class="especial mb-4">LISTA DE USUARIOS</h1>

                <table class="table" >
                    <thead class="table-success table-striped" >
                        <tr>
                            <th>Rut</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Correo</th>
                            <th>Direccion</th>
                            <th>Fecha Nacimiento</th>
                            <th>Edad</th>
                            <th>Sexo</th>
                            <th>Rol</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($row=mysqli_fetch_array($query)){
                        ?>
                        <tr>
                            <th><?php  echo $row['rut']?></th>
                            <th><?php  echo $row['nombre']?></th>
                            <th><?php  echo $row['apellido']?></th>
                            <th><?php  echo $row['correo']?></th>    
                            <th><?php  echo $row['direccion']?></th>    
                            <th><?php  echo $row['fecha_nacimiento']?></th>    
                            <th><?php  echo $row['edad']?></th>    
                            <th><?php  echo $row['sexo']?></th>    
                            <th><?php  echo $row['rol']?></th>    
                            <th><a href="actualizar.php?correo=<?php echo $row['correo'] ?>" class="btn btn-info">Editar</a></th>
                            <th><a href="delete.php?correo=<?php echo $row['correo'] ?>" class="btn btn-danger">Eliminar</a></th>     
                        </tr>
                        <?php
                           }
                        ?>
                    </tbody>
                </table> 
            </div>
        <?php else: ?>
            <?php  Header("Location: /uda/tarea1"); ?>         
        <?php endif; ?>
        <?php include_once "include/footer.php"; ?>        
    </body>
</html>