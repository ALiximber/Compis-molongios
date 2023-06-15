<!DOCTYPE html>
<html>
    <head>
        <title>Session</title>
    </head>

    <body>
        <?php
        session_start();

            if(isset($_SESSION['u_usuario'])){
                header("Location: tabla.php");
            }else{
                echo"session existosa\n Bienvenido";
                echo"<a href='cerrar_sesion.php'>cerrar sesion</a>"; 
            }
        ?>
    </body>
</html>