<html>
    <head>
        <title>Conexion</title>
        <style>
        
        </style>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </head>
    <body>
        <center>
        <div >
            <table border="=3" id="Tabla_principal">
                <thead>
                     <tr>
                        <th colspan="1">
                            <a href="formulario.html">Nuevo</a>
                            <th colspan="9">Lista de Pacientes</th>
                        </th>
                     </tr>   
                </thead>

 


               <table class="table">
                    <tbody>
                         <thead class="table-dark">
                            <tr>
                                <td>ID</td>
                                <td>Nombre</td>
                                <td>Edaad</td>
                                <td>Sexo</td>
                                <td>Sangre</td>
                                <td>Habitación</td>
                                <td>Diagnostico</td>
                                <td>CURP</td>
                                <td colspan="2">Operaciones</td>
                            </tr>
                        </thead>
                        <?php
                            include("conexion.php");
                            $query="SELECT * FROM progsalud";
                            $resultado=$conexion->query($query);
                                while($row=$resultado->fetch_assoc())
                                {
                        ?>
                        <tbody>
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
                    </tbody>
                </table>
            </table>
        </div>
       </center>   


       <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

    </body> 
</html>
