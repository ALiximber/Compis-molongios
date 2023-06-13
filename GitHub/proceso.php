<?php

session_start();

$Usuario=$_POST['usuario'];
$Contra=$_POST['contra'];

include("conexion.php");

$proceso=$conexion->query("SELECT * FROM progsalud WHERE usuario='$Usuario' AND contra='$Contra'");

if($resultado = mysqli_fetch_array($proceso))
{
    $_SESSION['u_usuario'] = $usuario;
    header("Location: sesion.php");
    echo"Session existosa";
}
else{
    echo"Session no extosa";
}
?>