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
                Ingrese el nombre completo del paciente:
                <input type="text" required name="Nombre" placeholder="Nombre"><br><br>
                Ingrese la Edad:
                <input type="text" required name="Edad" placeholder="Edad"><br><br>
                Ingrese el sexo:
                <input type="text" required name="Sexo" placeholder="Sexo"><br><br>
                Ingrese el tipo de sangre:
                <input type="text" required name="Sangre" placeholder="Tipo de sangre"><br><br>
                Ingrese el número de habitación:
                <input type="text" required name="Habitacion" placeholder="Num. Habitación"><br><br>
                Ingrese el diagnóstico:
                <input type="text" required name="Diag" placeholder="Diagnóstico"><br><br>
                Ingrese la CURP:
                <input type="text" required name="Curp" placeholder="CURP"><br><br>
        <input type="submit" value="Aceptar">
        </center>
    </form>
    </body>
</html>