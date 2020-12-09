<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Ejercicio 3</title>
</head>

<body style="background-color: #ebf5fb">
    <h3 class="text-center mt-3">Ejercicio 3</h3>
    <div class="container mt-3">
        <?php
        if (isset($_POST['enviar'])) {
            if(isset($_POST['sexo'])) {
                $sexo = $_POST['sexo'];
                echo "<p class='text-success font-weight-bold'>Sexo: $sexo</p>";
            }else {
                echo "<p class='text-danger font-weight-bold'>Error, no se has seleccionado el tu sexo.";
            }

            if(isset($_POST['aficiones'])) {
                $aficiones = $_POST['aficiones'];
                $misaficiones = "Has elegido " . count($aficiones). " aficiones: ";
                foreach($aficiones as $aficion) {
                    $misaficiones .= " $aficion";
                }
                echo "<p class='text-success font-weight-bold'>$misaficiones</p>";
            }else {
                echo "<p class='text-danger font-weight-bold'>Error, no has seleccionado ninguna afición.</p>";
            }
        } else {
        ?>
            <form name="form3" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <p>Indique su sexo y aficiones:</p>
                <!-- Campo para marcar el sexo -->
                <div class="form-group row">
                    <label for="sexo" class="col-sm-1 col-form-label"><strong>Sexo: </strong></label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sexo" value="Hombre">
                        <label class="form-ckeck-label" for="sexo">Hombre</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sexo" value="Mujer">
                        <label class="form-ckeck-label" for="sexo">Mujer</label>
                    </div>
                </div>
                <!-- Campo para marcar las aficiones -->
                <div class="form-group row">
                    <label for="sexo" class="col-sm-1 col-form-label"><strong>Aficiones: </strong></label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="aficiones[]" value="Cine">
                        <label class="form-ckeck-label" for="aficion">Cine</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="aficiones[]" value="Literatura">
                        <label class="form-ckeck-label" for="aficion">Literatura</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="aficiones[]" value="Música">
                        <label class="form-ckeck-label" for="aficion">Música</label>
                    </div>
                </div>
                <!-- Botones para enviar y borrar -->
                <button type="submit" name="enviar" class="btn btn-outline-primary">Enviar</button>
                <button type="reset" class="btn btn-outline-danger">Borrar</button>
            </form>
        <?php  } ?>
    </div>
</body>

</html>