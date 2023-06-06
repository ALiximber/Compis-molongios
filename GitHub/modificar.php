<html>
    <head>
        <title>Conexion BD</title>
    </head>
    <body>
        <center>
            <?php
                $id=$_REQUEST['id'];
                include("conexion.php");
                $query="SELECT * FROM progsalud where id='$id'";
                $resultado=$conexion->query($query);
                $row=$resultado->fetch_assoc();
            ?>
    <form method="post" action="modificar_proceso.php?id=<?php echo $row['id'];?>">
        Ingrese el nombre:
        <input type="text" REQUIRED name="Nombre" placeholder="Nombre" value="<?php echo $row['Nombre'];?>"/>
        <br><br>
        Ingrese el apellido:
        <input type="text" REQUIRED name="Edad" placeholder="apellido" value="<?php echo $row['Edad'];?>"/>
        <br><br>
        Ingrese el correo:
        <input type="text" REQUIRED name="Sexo" placeholder="correo" value="<?php echo $row['Sexo'];?>"/>
        <br><br><br>
        <input type="submit" value="Aceptar">
        </center>
    </form>
    </body>
</html>