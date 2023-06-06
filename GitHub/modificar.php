<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Conexión BD</title>
</head>
    <body>
        <center>
            <?php
                $id=$_REQUEST['id'];
                include("conexion.php");
                $query="SELECT * FROM usuarios WHERE id='$id'";
                $resultado = $conexion->query($query);
                $row=$resultado->fetch_assoc();
                ?>
        <form method="post" action="modificar_proceso.php?id=<?php echo $row['id'];?>">

                Ingrese el nombre:
                <input type="text" REQUIRED name="nombre" placeholder="Nombre" value="<?php echo $row['nombre']; ?>"/>
                <br>
                <br>
                Ingrese el apellido:
                <input type="text" REQUIRED name="apellidos" placeholder="apellidos" value="<?php echo $row['apellidos']; ?>"/>
                <br>
                <br>
                <br>
                Ingrese el correo:
                <input type="text" REQUIRED name="correo" placeholder="correo" value="<?php echo $row['correo']; ?>"/>
                <br>
                <br>
                <br>
                <input type="submit" value="Aceptar">
            </center>
        </form> 
    </body>
</html>