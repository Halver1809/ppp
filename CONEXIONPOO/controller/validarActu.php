<?php
include "../model/conexion.php";
extract($_REQUEST);

$objconection = conexion();
$sql = "UPDATE empleados SET EmplIdentificacion ='$_REQUEST[identificacion]', EmpNombre = '$_REQUEST[nombre]', EmpFechaIngreso = '$_REQUEST[fecha]', EmpCorreo = '$_REQUEST[correo]', EmpGenero ='$_REQUEST[genero]', EmpCargo = '$_REQUEST[cargo]'";

$resultado = $objconection->query($sql);

if ($resultado) {
    header("location:../views/listaremp.php?x=1");
} else {
    header("location:../views/listaremp.php?x=2");
}
