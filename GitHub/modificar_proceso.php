<?php
    include("conexion.php");

    $id = $_REQUEST['id'];
    $nom = $_POST['Nombre'];
    $Edad = $_POST['Edad'];
    $Sexo = $_POST['Sexo'];
    $Sangre = $_POST['Sangre'];
    $Hab = $_POST['Habitacion'];
    $diag = $_POST['Diagnostico'];
    $CURP = $_POST['CURP'];
    
    
    $query = "UPDATE ProgSalud set nombre= '$nom' , apellidos='$ape', correo= '$cor'  WHERE id='$id'";
    $resultado=$conexion->query($query);

    if($resultado){
        header("Location: tabla.php");
    }else{
        echo "No se modificó";
    }


?>
