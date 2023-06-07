<?php
require "../model/conexion.php";
$objConexion = conexion();

$sql = "SELECT * from empleados";
$resultado = $objConexion->query($sql);
$cantidadEmpleados = $resultado->num_rows;
echo "<br> La cantidad de empleados es:" . $cantidadEmpleados;
echo "<br>";
while ($empleado = $resultado->fetch_object()) {
    echo "<br> Nombre empleado: " . $empleado->empNombre;
    echo "<br> fecha de ingreso del empleado: " . $empleado->empFechaingreso;
    echo "<br> genero del empleado: " . $empleado->empGenero;
}
