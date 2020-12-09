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
if($autor->existeId() == 0) {
    $autor = null;
    header("Location:autores.php");
}
$fila = $autor->read();
$esteNombre = $fila -> nombre;
$esteApellido = $fila -> apellidos;



if (isset($_POST['update'])) {
    $n = trim(ucwords($_POST['nombre']));
    $a = trim(ucwords($_POST['apellidos']));
    if (strlen($a) == 0 || strlen($n) == 0) {
        $_SESSION['error'] = "Error, debe ingresar el nombre y los apellidos.";
        header("Location:{$_SERVER['PHP_SELF']}");
    }

    $autor->setNombre($n);
    $autor->setApellidos($a);
    $autor->update();
    $autor = null;
    $_SESSION['mensaje'] = "Autor actualizado correctamente.";
    header("Location:autores.php");
} else {
?>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Crear Autor</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    </head>

    <body style="background-color: darkSalmon">
        <h3 class="text-center my-3">Editar Autor</h3>
        <div class="container mb-3">
            <?php
            if (isset($_SESSION['error'])) {
                echo "<p class='text-light bg-dark font-weight-bold p-2'>{$_SESSION['error']}</p>";
                unset($_SESSION['error']);
            }
            ?>
            <form name="cautor" method="POST" action="<?PHP echo $_SERVER['PHP_SELF']."?id=$id" ?>">
                <div class="row">
                    <div class="col-4">
                        <input type="text" class="form-control" name="nombre" value="<?php echo $esteNombre; ?>" required>
                    </div>
                    <div class="col-8">
                        <input type="text" class="form-control" name="apellidos" value="<?php echo $esteApellido; ?>" required>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <button name="update" type="submit" class="btn btn-warning"><i class="fas fa-user-edit mr-2"></i>Actualizar</button>
                        <a href="autores.php" class="btn btn-success ml-3"><i class="fas fa-home mr-2"></i>Inicio</a>
                    </div>
                </div>
            </form>
        </div>
    </body>

    </html>
<?php } ?>