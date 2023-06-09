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
                $query="SELECT * FROM progsalud WHERE id='$id'";
                $resultado = $conexion->query($query);
                $row=$resultado->fetch_assoc();
                ?>
        <form method="post" action="modificar_proceso.php?id=<?php echo $row['id'];?>">

                Ingrese el nombre completo:
                <input type="text" REQUIRED name="Nombre" placeholder="Nombre" value="<?php echo $row['Nombre']; ?>"/>
                <br>
                <br>
                Ingrese el Edad:
                <input type="text" REQUIRED name="Edad" placeholder="apellidos" value="<?php echo $row['Edad']; ?>"/>
                <br>
                <br>
                <br>
                Ingrese el Sexo:
                <input type="text" REQUIRED name="Sexo" placeholder="correo" value="<?php echo $row['Sexo']; ?>"/>
                <br>
                <br>
                <br>

                Ingrese el tipo de sangre:
                <input type="text" REQUIRED name="Sangre" placeholder="apellidos" value="<?php echo $row['Sangre']; ?>"/>
                <br>
                <br>
                <br>
                Ingrese la habitación:
                <input type="text" REQUIRED name="Habitacion" placeholder="apellidos" value="<?php echo $row['Habitacion']; ?>"/>
                <br>
                <br>
                <br>
                Ingrese el diagnostico:
                <input type="text" REQUIRED name="Diag" placeholder="apellidos" value="<?php echo $row['Diag']; ?>"/>
                <br>
                <br>
                <br>
                Ingrese la CURP:
                <input type="text" REQUIRED name="Curp" placeholder="apellidos" value="<?php echo $row['Curp']; ?>"/>
                <br>
                <br>
                <br>
                <input type="submit" value="Aceptar">
            </center>
        </form> 
    </body>
</html>