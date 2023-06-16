<?php

    session_start();

    $Usuario = $_POST['usuario'];
    $Contra = $_POST['contra'];

    include("conexion.php");
    
    if ($Usuario == "" || $Contra == "") 
    {
        echo "Usuario y/o contraseña vacíos. Redireccionando a index.php...";
        header("Location: index.php");
        exit; // Termina la ejecución del script después de redireccionar
    }else if ($Usuario == "Principal" && $Contra == "Datos123") 
    {
        echo "Usuario y/o contraseña vacíos. Redireccionando a index.php...";
        header("Location: tabla.php");
        exit; // Termina la ejecución del script después de redireccionar
    }


    $proceso = $conexion->query("SELECT * FROM progsalud WHERE usuario='$Usuario' AND contra='$Contra'");

    if ($resultado = mysqli_fetch_array($proceso)) {
        $_SESSION['u_usuario'] = $Usuario;
        header("Location: sesion.php");
        echo "Sesión exitosa";
    } else {
        echo "Sesión no exitosa";
        header("Location: index.php");
    }

?>
