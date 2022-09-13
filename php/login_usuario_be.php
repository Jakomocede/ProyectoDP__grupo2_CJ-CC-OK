<?php

        session_start();

        

        include 'conexion_be.php';

        $username= $_POST['username'];

        $password= $_POST['password'];

        //$password=sha1($password);
        


        $validar_login = mysqli_query($conexion,"SELECT EST_NCEDULA ,EST_PASS,EST_TIPO FROM ESTUDIANTE where EST_NCEDULA='$username' and EST_PASS = '$password'");



        

        if (mysqli_num_rows($validar_login)>0){

            

            while($results = mysqli_fetch_array($validar_login)){

                    

                $comprobadortipo=$results['EST_TIPO'];        

                    }

                    $_SESSION['username']=$username;

                    $_SESSION['comprobadol']=$comprobadortipo;



                    if($_SESSION['comprobadol']==1){

                        header("location: ../ingreso/index.php");



                    }

                    elseif($_SESSION['comprobadol']==2){

                        header("location: ../ingreso/indexadmin.php");

                    }

                    

            

           

            exit;

           

        }

        else{

            echo'

            <script>

            alert("Usuario o contraseña erronea");

            window.location="../index.php";

            </script>

            ';

            exit;

        }



?>