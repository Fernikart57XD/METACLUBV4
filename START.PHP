<?php 
require_once('CONEXION.PHP');
session_start();
    if(isset($_POST['Login']))
    {
       if(empty($_POST['nombre_jugador']))
       {
            header("location:STARTXD.PHP?Empty= Please Fill in the Blanks");
       }
       else
       {
            $query="select * from employee where nombre_jugador='".$_POST['nombre_jugador']."'";
            $result=mysqli_query($con,$query);

            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['User']=$_POST['nombre_jugador'];
                header("location:BIENVENIDO.PHP");
            }
            else
            {
                header("location:STARTXD.PHP?Invalid= Please Enter Correct User Name and Password ");
            }
       }
    }
    else
    {
        echo 'Not Working Now Guys';
    }

?>