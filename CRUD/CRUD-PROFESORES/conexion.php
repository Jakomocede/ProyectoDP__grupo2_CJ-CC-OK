<?php
function conectar(){
    $host="localhost";
    $user="escm_adminsdesarrollo";
    $pass="desa130@";

    $bd="escm_bdDesarrolloMarieCurie";

    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);

    return $con;
}
?>
