<!DOCTYPE html>
<html lang="en">
<?php
function isTipoOk($tipo, $t)
{
    $imagenes = ["image/gif", "image/x-icon", "image/jpeg", "image/svg+xml", "image/tiff", "image/png"];
    $pdf = ["application/pdf"];
    if ($t == 0) return in_array($tipo, $pdf);
    if ($t == 1) return in_array($tipo, $imagenes);
}

function comprobarError($i, $t)
{
    if ($t == 0) $tipo = "Pdf";
    if ($t == 1) $tipo = "Imagen";
    echo "<p class='text-danger'>NO se subio un archivo de tipo $tipo!!!";
    switch ($i) {
        case 1:
            echo "<p class='text-warning'>El fichero subido excede la directiva upload_max_filesize de php.ini. </p>";
            break;
        case 2:
            echo "<p class='text-warning'>El fichero subido excede la directiva MAX_FILE_SIZE especificada en el formulario HTML. </p>";
            break;
    }
}

function subir($file, $tipo)
{
    if (is_uploaded_file($file['tmp_name'])) {
        if (isTipoOk($file['type'], $tipo)) {
            if ($tipo == 0) $nombre = "./Documentos/" . $file['name'];
            if ($tipo == 1) $nombre = "./Imagenes/" . $file['name'];
            if (!move_uploaded_file($file['tmp_name'], $nombre)) {
                comprobarError($file['error'], $tipo);
            } else {
                echo "<p class='text-success'>Archivo subido</p>";
            }
        } else {
            echo "<p class='text-warning'>Tipo equivocado. solo se permiten pdf para documentos y archivos de imagenes para la foto!!!!</p>";
        }
    } else {
        comprobarError($file['error'], $tipo);
    }
}

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title></title>
</head>

<body>
    <h3 class="mt-3 text-center">Subir Archivo</h3>
    <div class="container mt-3">
        <?php
        if (isset($_POST['enviar'])) {
            if (subir($_FILES['documento'], 0)) {
                echo "<p class='text-success'>Archivo Pdf subido</p>";
            }
            if (subir($_FILES['imagen'], 1)) {
                echo "<p class='text-success'>Archivo Imagen subido</p>";
            }
        } else {
            //pintamos el formulario

        ?>
            <form name="f1" action="<?php echo $_SERVER['PHP_SELF']; ?>" method='POST' enctype="multipart/form-data">
                <div class="row">
                    <div class='col'>
                        <label for='fich'>Elige un archivo (pdf)</label><br>
                        <!-- Si queremos especificar un tamaño Máximo en bytes -->
                        <input type='hidden' name='MAX_FILE_SIZE' value='1000000000'>
                        <input type='file' name='documento' class='from-control-file' id='fich' accept='application/pdf' />
                    </div>


                </div>
                <div class="row mt-3">
                    <div class='col'>
                        <label for='fich'>Elige una imagen</label><br>
                        <!-- Si queremos especificar un tamaño Máximo en bytes -->
                        <input type='hidden' name='MAX_FILE_SIZE' value='1000000000'>
                        <input type='file' name='imagen' class='from-control-file' id='fich' accept='image/*' />
                    </div>


                </div>
                <div class="row mt-4">
                    <div class="col">
                        <input type='submit' class='btn btn-primary' name='enviar' value='Subir'>
                    </div>
                </div>
            </form>
        <?php } ?>
    </div>
</body>

</html>