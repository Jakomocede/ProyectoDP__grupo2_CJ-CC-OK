<?php
include("conexion.php");
$con=conectar();

$PROF_CEDULA =$_POST['PROF_CEDULA'];
$PROF_CORREO=$_POST['PROF_CORREO'];
$PROF_FOTO=$_POST['PROF_FOTO'];
$PROF_NOMBRE=$_POST['PROF_NOMBRE'];
$PROF_CLAVE=$_POST['PROF_CLAVE'];


$sql="INSERT INTO  PROFESORES ( PROF_CORREO,  PROF_FOTO,  PROF_CEDULA,  PROF_NOMBRE,  
PROF_CLAVE ) VALUES 
('$PROF_CORREO','$PROF_FOTO','$PROF_CEDULA','$PROF_NOMBRE','$PROF_CLAVE')";

$query= mysqli_query($con,$sql);

if($query){
    Header("Location: profesor.php");
    
}else {
}
?>