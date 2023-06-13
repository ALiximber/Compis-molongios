<?php

session_start();

$usuario=$_POST['usuario'];
$Contra=$_POST['contra'];

include("conexion.php");

$proceso=$conexion->query("SELECT * FROM progsalud WHERE usuario='$Usuario' AND contras='$Contra'");

if($resultado = mysqli_fetch_array($proceso))
{
    $_SESSION['u_usuario'] = $usuario;
    header("Location: sesion.php");
    echo"Session existosa";
}
else{
    header("Location: sesion.php");
    echo"Session no extosa";
}
?>