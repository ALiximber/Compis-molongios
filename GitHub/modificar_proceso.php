<?php
    include("conexion.php");

    $id = $_REQUEST['id'];
    $nom = $_POST['Nombre'];
    $Edad = $_POST['Edad'];
    $Sexo = $_POST['Sexo'];
    $Sangre = $_POST['Sangre'];
    $Hab = $_POST['Habitacion'];
    $diag = $_POST['Diag'];
    $CURP = $_POST['Curp'];
    $Usuario = $_POST['usuario']
    $Contra = $_POST['contraseña'];
    
    
    $query = "UPDATE progsalud set Nombre= '$nom' , Edad='$Edad', Sexo= '$Sexo', Sangre='$Sangre', Habitacion='$Hab', Diag='$diag', Curp='$CURP', contraseña='$Contra', usuario='$Usuario' WHERE id='$id'";
    $resultado=$conexion->query($query);

    if($resultado){
        header("Location: tabla.php");
    }else{
        echo "No se modificó";
    }


?>
