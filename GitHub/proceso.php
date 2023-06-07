<?php

session_start();

$usuario=$_POST['usuario'];
$contrasña=$_POST['contraseña'];

include("conexion.php");

$proceso=$conexion->query("SELECT * FROM progsalud WHERE usuario='$usuario' AND contraseña='$contrasña' ");

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