<!DOCTYPE html>
<?php 
    function isTipoOk($tipo) {
        return $tipo == "application/pdf";
    }

    function comprobarError($i) {
        switch($i) {
            case 1:
                echo "<p class='text-danger'>El fichero subido excede la directiva upload_max_filesize</p>";
            break;

            case 2:
                echo "<p class='text-danger'>El fichero subido excede la directiva MAX_FILE_SIZE especificada en el formulario HTML. </p>";
            break;
        }
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>File 1</title>
</head>
<body style="background-color: lightgrey">
    <h3 class="text-center mt-3">Subir Archivo PHP</h3>
    <div class="container mt-3">
    <?php
        if(isset($_POST['enviar'])) {
            //Procesamos en formulario
            //var_dump($_FILES['documento']);
            if(is_uploaded_file($_FILES['documento']['tmp_name'])) {
                //Si pasa esto he subido el archivo sin problema pero
                //esta en una carpeta temporal, tengo que decidir si 
                //guardarlo o no
                //comprobamos el tipo
                if(isTipoOk($_FILES['documento']['type'])) {
                    //El tipo es correcto, lo pasamos de temporal a Documentos
                    $nombre = "./Documentos/" .$_FILES['documento']['name'];
                    if(!move_uploaded_file($_FILES['documento']['tmp_name'], $nombre)) {
                        die("Error al mover el archivo desde la carpeta temporal");
                    }else {
                        echo "<p class='text-success'>Archivo subido</p>";
                    }
                }else {
                    echo "<p class='text-warning'>El archivo NO es un PDF</p>";
                }
            }else {
                comprobarError($_FILES['documento']['error']);
            }
        }else {
            //Pintamos el formulario
        
    ?>
        <form name="f1" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col">
                    <label for="fich">Elige un archivo(pdf)</label>
                    <!-- Si queremos especificar un tamaño Máximo en bytes -->
                    <input type="hidden" name="MAX_FILE_SIZE" value="5242880">
                    <input type="file" name="documento" class="from-control-file" id="fich" accept="application/pdf">
                </div>
            </div>

            <!-- <div class="row mt-3">
                <div class="col">
                    <label for="fich">Elige una imagen</label>
                    
                    <input type="hidden" name="MAX_FILE_SIZE" value="5242880">
                    <input type="file" name="imagen" class="from-control-file" id="fich" accept="image/*">
                </div>
            </div> -->

            <div class="row mt-4">
                <div class="col">
                    <input type="submit" class="btn btn-danger" name="enviar" value="Subir">
                </div>
            </div>
        </form>
        <?php } ?>
    </div>
</body>
</html>