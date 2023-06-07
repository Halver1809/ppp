<?php
require "../model/conexion.php";
extract($_REQUEST);

$objConexion = conexion();
$sql = "INSERT INTO usuarios(UsuLogin, UsuPassword) values ('$_REQUEST[empleado]', '$_REQUEST[clave]')";




$resultado = $objConexion->query($sql);

if ($resultado) {
    echo "<script>location.href = '../views/cargo.php';</script>";
} else {
    echo "Problemas con insertar los datos";
}
