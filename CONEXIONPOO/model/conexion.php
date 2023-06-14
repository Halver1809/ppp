<?php
function conexion()
{
    $conexion = new mysqli("localhost", "root", "", "empresa");

    if ($conexion->connect_errno) {
        echo "error de conexion" . $conexion->connect_errno;
    } else {
        //echo "Conexion exitosa";
        return $conexion;
    }
}//if(resultado= $conexion)