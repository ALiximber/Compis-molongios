<html>
    <head>
        <title>Conexion</title>
    </head>
    <body>
        <center>
            <table border="=3">
                <thead>
                     <tr>
                        <th colspan="1">
                            <a href="formulario.html">Nuevo</a>
                            <th colspan="10">Lista de Pacientes</th>
                        </th>
                     </tr>   
                </thead>
                <tbody>
                    <tr>
                        <td>ID</td>
                        <td>Nombre</td>
                        <td>Apellido</td>
                        <td>Correo</td>
                        <td>Sangre</td>
                        <td>Habitación</td>
                        <td>Diagnostico</td>
                        <td>CURP</td>
                        <td colspan="2">Operaciones</td>
                    </tr>
                    <?php
                        include("conexion.php");
                           $query="SELECT * FROM progsalud";
                           $resultado=$conexion->query($query);
                               while($row=$resultado->fetch_assoc())
                               {
                    ?>
                        <tr>
                            <td><?php echo $row['id'];?></td>
                            <td><?php echo $row['Nombre'];?></td>
                            <td><?php echo $row['Edad'];?></td>
                            <td><?php echo $row['Sexo'];?></td>

                            <td><?php echo $row['Sangre'];?></td>
                            <td><?php echo $row['Habitacion'];?></td>
                            <td><?php echo $row['Diag'];?></td>
                            <td><?php echo $row['Curp'];?></td>

                            <td><a href="modificar.php?id=<?php echo $row['id'];?>">Modificar</a></td>
                            <td><a href="eliminar.php?id=<?php echo $row['id'];?>">Eliminar</a></td>
                               
                        </tr>
                    <?php
                               }
                    ?>
                </tbody>
            </table>
       </center>   
    </body> 
</html>