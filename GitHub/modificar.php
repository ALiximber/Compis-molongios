<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
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

        <div class="formulario sombra">
                    <div>
                        <div id="titulo">
                            <h2> PROGSALUD </h2><BR>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Ingrese el nombre completo del paciente:</label>
                        <input  id="color" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" type="text" required name="Nombre" placeholder="Nombre" value="<?php echo $row['Nombre']; ?>"><br>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Ingrese la Edad:</label>
                        <input id="color"  class="form-control" id="exampleInputPassword1" type="text" required name="Edad" placeholder="Edad" value="<?php echo $row['Edad']; ?>"><br>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Ingrese el sexo:</label>
                        <input  id="color" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" type="text" required name="Sexo" placeholder="Ingrese el sexo" value="<?php echo $row['Sexo']; ?>"><br>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label"> Ingrese el tipo de sangre:</label>
                        <input  id="color" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" type="text" required name="Sangre" placeholder="Ingrese el tipo de sangre" value="<?php echo $row['Sangre']; ?>"><br>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label"> Ingrese el número de habitación:</label>
                        <input  id="color" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" type="text" required name="Habitacion" placeholder="Num. Habitación" value="<?php echo $row['Habitacion']; ?>"><br>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label"> Ingrese el diagnóstico:</label>
                        <input  id="color" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" type="text" required name="Diag" placeholder="Diagnóstico" value="<?php echo $row['Diag']; ?>"><br>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label"> Ingrese la CURP:</label>
                        <input  id="color" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" type="text" required name="Curp" placeholder="CURP" value="<?php echo $row['Curp']; ?>"><br>
                    </div>
            
                    <input type="submit" class="btn btn-outline-primary" value="Guardar"><br><br>
                    <a class="icon-link icon-link-hover" href="tabla.php">
                        Ver tabla
                        <svg class="bi" aria-hidden="true"><use xlink:href="#arrow-right"></use></svg>
                    </a>
                </div>
                
            </center>
        </form> 
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    </body>
</html> 