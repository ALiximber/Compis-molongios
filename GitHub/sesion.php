<!DOCTYPE html>
<html>
    <head>
        <title>Session</title>
    </head>

    <body>
        <?php
        session_start();

            if(isset($_SESSION['usuario'])){
                echo"session existosa\n Bienvenido";

                 echo"<a href='cerrar_sesion.php'>cerrar sesion</a>";
                
            
            }else{
               header("Location: tabla.php");
            }
        ?>
    </body>
</html>