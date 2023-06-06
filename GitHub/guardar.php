<?php
    include("conexion.php");
    $nombre=$_POST['Nombre'];
    $edad=$_POST['Edad'];
    $sexo=$_POST['Sexo'];

    $query="INSERT INTO progsalud (Nombre,Edad,Sexo) values ('$nombre','$edad','$sexo')";
    $resultado=$conexion->query($query);

    if($resultado)
        header("Location: tabla.php");
    else 
        echo "No se insertó correctamente";
?>