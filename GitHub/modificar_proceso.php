<?php
    include("conexion.php");
    $id=$_REQUEST['id'];
    $nombre=$_POST['Nombre'];
    $edad=$_POST['Edad'];
    $sexo=$_POST['Sexo'];
    $query="UPDATE progsalud set Nombre='$nombre',Edad='$edad',Sexo='$sexo' WHERE id='$id'";
    $resultado=$conexion->query($query);

    if($resultado)
        header("Location: tabla.php");
    else 
        echo "No se modifico";
?>