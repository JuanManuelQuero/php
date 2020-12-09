<!DOCTYPE html>
<?php
session_start();
if (!isset($_GET['id'])) {
    header("Location:autores.php");
}
$id = $_GET['id'];

require "../vendor/autoload.php";

use Clases\Autores;

$autor = new Autores();
$autor->setId_autor($id);
if ($autor->existeId() == 0) {
    $autor = null;
    header("Location:autores.php");
}
$fila = $autor->read();
$esteNombre = $fila->nombre;
$esteApellido = $fila->apellidos;
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
</head>

<body style="background-color: darkSalmon">
    <h3 class="text-center my-3">Detalle Autor</h3>
    <div class="container">
        <div class="card text-white bg-dark mb-3 m-auto" style="max-width: 38rem;">
            <div class="card-header text-center">Autor</div>
            <div class="card-body">
                <p class="card-text mb-2">Código: <?php echo $id; ?></p>
                <p class="card-text mb-2">Apellidos: <?php echo $esteApellido; ?></p>
                <p class="card-text mb-2">Nombre: <?php echo $esteNombre; ?></p>
                <p class="float-right">
                    <a href="autores.php" class="btn btn-success"><i class="fas fa-home mr-2"></i>Inicio</a>
                </p>
            </div>
        </div>
    </div>
</body>

</html>