<?php
require "../model/conexion.php";
extract($_REQUEST);

$objConexion = conexion();
$sql = "INSERT INTO cargos(CarNombre, CarSueldo) values ('$_REQUEST[nombre]', '$_REQUEST[sueldo]')";




$resultado = $objConexion->query($sql);

if ($resultado) {
    echo "<script>location.href = '../views/cargo.php';</script>";
} else {
    echo "Problemas con insertar los datos";
}
