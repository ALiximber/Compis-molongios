<?php
$conexion = new mysqli ("190.1.1.247","21proga518","Cbtis94","21proga518");
if($conexion){
    echo "conexión exitosa";
}else{
    echo "Error en la conexión";
}
?>