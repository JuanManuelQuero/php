<!DOCTYPE html>
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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Ejercicio 7</title>
</head>
<body style="background-color: #ebf5fb">
    <h3 class="text-center mt-3">Validar datos</h3>
    <div class="container mt-3">
        <?php
            if (subir($_FILES['documento'], 0)) {
                echo "<p class='text-success'>Archivo Pdf subido</p>";
            }
            if (subir($_FILES['imagen'], 1)) {
                echo "<p class='text-success'>Archivo Imagen subido</p>";
            }
        ?>
    </div>
</body>
</html>