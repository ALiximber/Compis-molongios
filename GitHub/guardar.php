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

    $query = "INSERT INTO progsalud(Nombre, Edad ,Sexo, Sangre, Habitacion, Diag, Curp) VALUES('$nom','$Edad','$Sexo','$Sangre','$Hab','$diag', '$CURP')";
    $resultado=$conexion->query($query);

    header("Location: tabla.php");
?>
