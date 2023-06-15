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
                 
                $dato = $_SESSION['dato'];
                $_SESSION['Dato'] =  $dato;
            
            }else{
                $dato = $_SESSION['dato'];
                $_SESSION['Dato'] =  $dato;

                header("Location: tabla.php");
            }
        ?>
    </body>
</html>