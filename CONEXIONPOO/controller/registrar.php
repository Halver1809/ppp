<?php
require "../model/conexion.php";
extract($_REQUEST);

$objConexion = conexion();
$sql = "INSERT INTO empleados(EmplIdentificacion, EmpNombre, EmpFechaIngreso, EmpCorreo, EmpGenero, EmpCargo)values('$_REQUEST[identificacion]','$_REQUEST[nombre]','$_REQUEST[fecha]','$_REQUEST[correo]','$_REQUEST[genero]','$_REQUEST[cargo]')";
$resultado = $objConexion->query($sql);

if ($resultado) {
    echo "<script>location.href = '../views/usuario.php';</script>";
} else {
    echo "Problemas con insertar los datos";
}
