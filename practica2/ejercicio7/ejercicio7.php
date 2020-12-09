<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Ejercicio 7</title>
</head>

<body>
    <h3 class="mt-3 text-center">Ejercicio 7</h3>
    <div class="container mt-3">
        <form name="form7" action="action7.php" method='POST' enctype="multipart/form-data">
            <div class="row">
                <div class='col'>
                    <label for='fich'>Elige un archivo (pdf)</label><br>
                    <!-- Si queremos especificar un tamaño Máximo en bytes -->
                    <input type='hidden' name='MAX_FILE_SIZE' value='5242880'>
                    <input type='file' name='documento' class='from-control-file' id='fich' accept='application/pdf' />
                </div>
            </div>
            <div class="row mt-3">
                <div class='col'>
                    <label for='fich'>Elige una imagen</label><br>
                    <!-- Si queremos especificar un tamaño Máximo en bytes -->
                    <input type='hidden' name='MAX_FILE_SIZE' value='5242880'>
                    <input type='file' name='imagen' class='from-control-file' id='fich' accept='image/*' />
                </div>
            </div>
            <!-- Botones para enviar y borrar -->
            <div class="row mt-4">
                <div class="col">
                    <input type='submit' class='btn btn-outline-primary' name='enviar' value='Subir'>
                    <input type="reset" class="btn btn-outline-danger" name="borrar" value="Borrar">
                </div>
            </div>
        </form>
    </div>
</body>

</html>