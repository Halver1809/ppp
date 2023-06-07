<?php
require "../model/conexion.php";
$objConection = conexion();
$sql = "SELECT EmplIdentificacion,EmpNombre FROM empleados";
$resultado = $objConection->query($sql);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO MARVENT</title>
    <link rel="icon" href="../resources/imagenes/logo.png">
    <link rel="stylesheet" href="../resources/css/usuario.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

</head>

<body>
    <form action="../controller/registrarUsuario.php" class="form-box">
        <a href="menu.php" class="btn "> <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-reply-all-fill" viewBox="0 0 16 16">
                <path d="M8.021 11.9 3.453 8.62a.719.719 0 0 1 0-1.238L8.021 4.1a.716.716 0 0 1 1.079.619V6c1.5 0 6 0 7 8-2.5-4.5-7-4-7-4v1.281c0 .56-.606.898-1.079.62z" />
                <path d="M5.232 4.293a.5.5 0 0 1-.106.7L1.114 7.945a.5.5 0 0 1-.042.028.147.147 0 0 0 0 .252.503.503 0 0 1 .042.028l4.012 2.954a.5.5 0 1 1-.593.805L.539 9.073a1.147 1.147 0 0 1 0-1.946l3.994-2.94a.5.5 0 0 1 .699.106z" />
            </svg></a>
        <div class="text-center clas">
            <div class="text-center clas">
                <br>
                <svg xmlns="http://www.w3.org/2000/svg" width="90" height="90" fill="currentColor" class="bi bi-alipay" viewBox="0 0 16 16">
                    <path d="M2.541 0H13.5a2.551 2.551 0 0 1 2.54 2.563v8.297c-.006 0-.531-.046-2.978-.813-.412-.14-.916-.327-1.479-.536-.303-.113-.624-.232-.957-.353a12.98 12.98 0 0 0 1.325-3.373H8.822V4.649h3.831v-.634h-3.83V2.121H7.26c-.274 0-.274.273-.274.273v1.621H3.11v.634h3.875v1.136h-3.2v.634H9.99c-.227.789-.532 1.53-.894 2.202-2.013-.67-4.161-1.212-5.51-.878-.864.214-1.42.597-1.746.998-1.499 1.84-.424 4.633 2.741 4.633 1.872 0 3.675-1.053 5.072-2.787 2.08 1.008 6.37 2.738 6.387 2.745v.105A2.551 2.551 0 0 1 13.5 16H2.541A2.552 2.552 0 0 1 0 13.437V2.563A2.552 2.552 0 0 1 2.541 0Z" />
                    <path d="M2.309 9.27c-1.22 1.073-.49 3.034 1.978 3.034 1.434 0 2.868-.925 3.994-2.406-1.602-.789-2.959-1.353-4.425-1.207-.397.04-1.14.217-1.547.58Z" />
                </svg>
                <br>
                <br>
                <h1 class="Form-tittle">Registro de usuario</h1>
            </div>
            <label class="form-title3">Nombre de usuario</label>
            <select class="form-control" required placeholder name="empleado">
                <option value="0">Selecciona un usuario</option>
                <?php

                while ($empleado = $resultado->fetch_object()) {
                ?>
                    <option value="<?php echo $empleado->EmplIdentificacion ?>">
                        <?php echo $empleado->EmpNombre ?></option>
                <?php }

                ?>

            </select>
            <br>
            <label class="form-title3">Clave de usuario</label>
            <input placeholder="Porfavor ingrese clave segura" type="password" class="form-control" required placeholder="" name="clave">
            <div class="text-center d-grid gap-2">
                <br>
                <button type="submit" class="btn btn-dark">
                    Registrar
                </button>
            </div>

        </div>



    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

</body>

</html>