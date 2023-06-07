<?php
require_once "../model/conexion.php";
$objConexion = conexion();

$sql = "SELECT * from empleados where empIdentificacion = 11";

$resultado = $objConexion->query($sql);

//imprimir en pantalla los datos del empleado
if ($empleado = $resultado->fetch_object()) {
    echo "<br> nombre del empleado: " . $empleado->empNombre;

    echo "<br> fecha de ingreso del empleado: " . $empleado->empFechaingreso;

    echo "<br> genero del empleado: " . $empleado->empGenero;
} else {
    echo "el empleado no existe";
}
