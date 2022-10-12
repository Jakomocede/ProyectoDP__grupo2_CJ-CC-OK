<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM PROFESORES";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA PROFESOR</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="PROF_CORREO" placeholder="CORREO PROFESOR">
                                    <input type="text" class="form-control mb-3" name="PROF_FOTO" placeholder="FOTO PROFESOR">
                                    <input type="text" class="form-control mb-3" name="PROF_CEDULA" placeholder="CEDULA PROFESOR">
                                    <input type="text" class="form-control mb-3" name="PROF_NOMBRE" placeholder="NOMBRE DEL PROFESOR">
                                   <input type="text" class="form-control mb-3" name="PROF_CLAVE" placeholder="CLAVE DEL PROFESOR">
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>PROF_CORREO</th>
                                        <th>PROF_FOTO</th>
                                      <th>PROF_CEDULA</th>
                                        <th>PROF_NOMBRE</th>
                                        <th>PROF_CLAVE</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['PROF_CORREO']?></th>
                                                <th><?php  echo $row['PROF_FOTO']?></th>                                              
                                               <th><?php  echo $row['PROF_CEDULA']?></th>
                                               <th><?php  echo $row['PROF_NOMBRE']?></th>
                                                <th><?php
                                          $hashed_password = crypt($row['PROF_CLAVE']);
                                          echo $hashed_password?></th>   
                                              <th><a href="actualizar.php?id=<?php echo $row['PROF_CEDULA'] ?>" class="btn btn-info">Editar</a><a href="delete.php?id=<?php echo $row['PROF_CEDULA'] ?>" class="btn btn-danger">Eliminar</a></th>
                                                                                       
                                            
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>