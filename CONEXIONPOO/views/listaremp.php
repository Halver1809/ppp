<?php
require "../model/conexion.php";
extract($_REQUEST);

if (!isset($_REQUEST['x'])) {
    $x = 0;
}
$objConexion = conexion();
$sql = "SELECT e.EmplIdentificacion, e.EmpNombre, e.EmpCorreo, EmpFechaIngreso, c.CarNombre, c.CarSueldo FROM empleados e, cargos c where (e.EmpCargo = c.IdCargo)";
$resultado = $objConexion->query($sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1 align="center">
        listar empleado </h1>
    <table width="89%" border="0" align="center">
        <tr align="center" bgcolor="#99F7C5">
            <td width="11%"> Identificacion</td>
            <td width="16%"> Nombre</td>
            <td width="19%"> Correo</td>
            <td width="12%"> Fecha ingreso</td>
            <td width="15%"> Cargo</td>
            <td width="10%"> Sueldo</td>
            <td width="7%"> Editar</td>
            <td width="10%"> Eliminar</td>
        </tr>
        <?php
        while ($empleado = $resultado->fetch_object()) {

        ?>

            <tr align="center" bgcolor="#ccccff">
                <td> <?php echo $empleado->EmplIdentificacion ?></td>
                <td> <?php echo $empleado->EmpNombre ?></td>
                <td> <?php echo $empleado->EmpCorreo ?></td>
                <td> <?php echo $empleado->EmpFechaIngreso ?></td>
                <td> <?php echo $empleado->CarNombre ?></td>
                <td> <?php echo $empleado->CarSueldo ?></td>
                <td align="center"><a href="editar.php?IdEmpleado=<?php echo $empleado->IdEmpleado ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                        </svg></a></td>
                <td align="center"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                        <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                    </svg></td>
            </tr>

        <?php } ?>
    </table>
    <p>

        <?php
        if ($x == 1) {
            echo "se ah actualizado correctamente";
        }
        if ($x == 2) {
            echo "problemas al actualizar usuario";
        }
        ?>
    </p>
</body>

</html>