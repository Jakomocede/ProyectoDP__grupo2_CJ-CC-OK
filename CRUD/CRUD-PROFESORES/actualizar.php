<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM PROFESORES WHERE PROF_CEDULA='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>ACTUALIZAR DATOS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="PROF_CEDULA" value="<?php echo $row['PROF_CEDULA']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="PROF_CORREO" placeholder="CORREO" value="<?php echo $row['PROF_CORREO']  ?>">
                                <input type="text" class="form-control mb-3" name="PROF_FOTO" placeholder="FOTO" value="<?php echo $row['PROF_FOTO']  ?>">
                                <input type="text" class="form-control mb-3" name="PROF_NOMBRE" placeholder="NOMBRE" value="<?php echo $row['PROF_NOMBRE']  ?>">
                                <input type="text" class="form-control mb-3" name="PROF_CLAVE" placeholder="CLAVE" value="<?php echo $row['PROF_CLAVE']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>