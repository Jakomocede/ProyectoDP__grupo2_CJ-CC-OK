<?php

include("conexion.php");
$con=conectar();

$PROF_CEDULA =$_GET['id'];

$sql="DELETE FROM PROFESORES  WHERE PROF_CEDULA='$PROF_CEDULA '";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: profesor.php");
    }
?>
