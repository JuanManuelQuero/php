<!DOCTYPE html>
<?php
session_start();
if (!isset($_GET['id'])) {
    header("Location:index.php");
    die();
}

require "../vendor/autoload.php";

use Clases\Marcas;

$miMarcaId = $_GET['id'];
$miMarca = new Marcas();
$miMarca->setId_marca($miMarcaId);
$miMarcaDatos = $miMarca->read();
$provincia = $miMarcaDatos->provincia;
$nombre = $miMarcaDatos->nombre;
$imagen = $miMarcaDatos->imagen;


function mostrarError($texto)
{
    global $miMarcaId;
    $_SESSION['error'] = $texto;
    $urlconGET = $_SERVER['PHP_SELF'] . "?id=$miMarcaId";
    header("Location:$urlconGET");
    die();
}

function esImagen($tipo)
{
    $tipos = ['image/gif', 'image/jpeg', 'image/x-icon', 'image/tiff', 'image/bmp', 'image/png', 'image/webp'];
    return in_array($tipo, $tipos);
}


$provincias = ["Almeria", "Cadiz", "Cordoba", "Granada", "Huelva", "Jaen", "Sevilla"];
if (isset($_POST['btnEditar'])) {

    //procesamos el formulario
    $provincia = $_POST['provincia'];
    $nombre = trim(ucwords($_POST['nombre']));
    if (strlen($nombre) == 0) {
        mostrarError("Rellene el campo nombre por favor.");
    }
    if (is_uploaded_file($_FILES['imagen']['tmp_name'])) {
        //compruebo que sea realmente una imagen
        if (esImagen($_FILES['imagen']['type'])) {
            //es un fichero de imagen lo guardamos con un nombre aleatorio
            $miImagen = "./img/" . uniqid() . "_" . $_FILES['imagen']['name'];
            move_uploaded_file($_FILES['imagen']['tmp_name'], $miImagen);
            //borramos la imagen anterior de la marca, salvo que sea la default.jpg
            $miMarca->setImagen($miImagen);
            if(basename($imagen) != "default.jpg") {
                unlink($imagen);
            }
        } else {
            mostrarError("Debes subir un archivo de imagen.");
        }
    } else {
        $miMarca->setImagen($imagen);
    }
    $miMarca->setProvincia($provincia);
    $miMarca->setNombre($nombre);
    $miMarca->update();
    $miMarca = null;

    $_SESSION['mensaje'] = "Marca actualizada correctamente.";
    header("Location:index.php");
} else {
?>


    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Update</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    </head>

    <body style="background-color: darkSalmon">
        <h3 class="text-center my-3">Editar Marca</h3>
        <div class="container my-4">
            <?php
            if (isset($_SESSION['error'])) {
                echo "<p class='my-2 text-light bg-dark'>{$_SESSION['error']}</p>";
                unset($_SESSION['error']);
            }
            ?>
            <form name="cm" method="POST" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']."?id=$miMarcaId" ?>">
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" value="<?php echo $nombre; ?>" name="nombre">
                    </div>
                    <div class="col">
                        <select name="provincia" class="form-control">
                            <?php
                            foreach ($provincias as $valor) {
                                if ($valor == $provincia)
                                    echo "<option selected>$valor</option>";
                                else
                                    echo "<option>$valor</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <b>Imagen de Marca: </b>
                        <input type="file" class="form-control" name="imagen">
                    </div>
                    <div class="col">
                        <img src="<?php echo $imagen; ?>" width="100rem" height="100rem" class="img-thumbnail">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <button class="btn btn-primary mr-2" type="submit" name="btnEditar"><i class="fas fa-plus mr-2"></i>Editar</button>
                        <a href="index.php" class="btn btn-info"><i class="fas fa-home mr-2"></i>Inicio</a>
                    </div>
                </div>
            </form>
    </body>

    </html>
<?php } ?>