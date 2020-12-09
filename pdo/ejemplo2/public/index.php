<!DOCTYPE html>
<?php
session_start();

require "../vendor/autoload.php";

use Clases\Marcas;

$marcas = new Marcas();
$todos = $marcas->recuperarTodas();
$marcas = null;
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marcas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
</head>

<body style="background-color: darkSalmon">
    <h3 class="text-center my-3">Marcas</h3>
    <div class="container my-4">
    <?php
            if(isset($_SESSION['mensaje'])) {
                echo "<p class='my-2 text-light bg-dark'>{$_SESSION['mensaje']}</p>";
                unset($_SESSION['mensaje']);
            }
        ?>
    <a href="crearMarca.php" class="btn btn-success my-3"><i class="fas fa-plus mr-2"></i>Crear Marca</a>
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Provincia</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($fila = $todos->fetch(PDO::FETCH_OBJ)) {
                    echo <<<TEXTO
                        <tr>
                            <th scope="row">{$fila->id_marca}</th>
                            <td>{$fila->nombre}</td>
                            <td>{$fila->provincia}</td>
                            <td>
                            <img src='{$fila->imagen}' widht='90rem' height='90rem'>
                            </td>
                            <td>
                            <form name="b" action="borrarMarca.php" method="POST" class="form form-inline">
                                <a href="updateMarca.php?id={$fila->id_marca}" class="btn btn-info mr-2">Editar</a>
                                <input type="hidden" name="marcaID" value="{$fila->id_marca}">
                                <input type="submit" class="btn btn-danger" value="Borrar">
                            </form>
                            </td>
                        </tr>
                    TEXTO;
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>