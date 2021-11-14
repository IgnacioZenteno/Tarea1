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

    if(isset($_POST{'consulta'})){
        $q = ($_POST['consulta']);
        $sql = ("SELECT *  FROM usuarios WHERE nombre LIKE '%".$q."%' OR sexo LIKE '%".$q."%' OR edad LIKE '%".$q."%' OR apellido LIKE '%".$q."%' OR correo LIKE '%".$q."%'");
    }else{
        $sql = ("SELECT *  FROM usuarios ORDER BY 'nombre' ASC");
    }
                          
    $result=mysqli_query($conexion,$sql);

?>




<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Lista de Usuarios</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        <link rel="stylesheet" type="text/css" href="css/fuente.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
        
    </head>
    <body>
        <?php include_once "include/header.php"; ?>
         
        <?php if ($user['rol']=='Admin'):?>
        

        <div class="container-xxl  bg-light">
            <section class="principal ">
            <h1 class="especial mb-4">LISTA DE USUARIOS</h1>
            <h1 class=" mb-2 h3">Busqueda De Usuario</h1>
            <form class="form bg-light mb-4" action="lista_usuarios.php" method="POST" >
                <label >Buscar</label>
                <input type="text" name="consulta" id="consulta" > 
                 <button type="submit" class=" w-auto btn btn btn-primary" >Buscar</button>
            </form>
            <table class="table " >
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

                        while($row=mysqli_fetch_array($result)){
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
                            <th><a href="update_tabla.php?correo=<?php echo $row['correo'] ?>" class="btn btn-primary">Actualizar</a></th>   
                            <th><a href="consultas/delete_table.php?correo=<?php echo $row['correo'] ?>" class="btn btn-danger">Eliminar</a></th>

                        </tr>

                        <?php
                           }
                        ?>
                    </tbody>
                </table>
        </section>
        </div>
        
                
        <?php else: ?>
            <?php  Header("Location: /uda/tarea1"); ?>         
        <?php endif; ?>
        <?php include_once "include/footer.php"; ?>   
     
    </body>
</html>