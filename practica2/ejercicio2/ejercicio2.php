<!DOCTYPE html>
<html lang="en">
<?php
function comprobarNumero($n)
{
    return is_numeric($n);
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Ejercicio 2</title>
</head>

<body style="background-color: #ebf5fb">
    <h3 class="text-center mt-3">Ejercicio 2</h3>
    <div class="container mt-3">
        <?php
        if (isset($_POST['enviar'])) {
            $edad = trim($_POST['edad']);
            $peso = trim($_POST['peso']);

            if (!comprobarNumero($edad)) {
                echo "<p class='text-danger font-weight-bold'>Error, no se ha introducido un valor numérico o el campo no se ha rellenado.</p>";
            } else if ($edad < 5 || $edad > 130) {
                echo "<p class='text-warning font-weight-bold'>La edad introducida no es válida.</p>";
            } else {
                echo "<p class='text-success font-weight-bold'>Edad: $edad</p>";
            }

            if (!comprobarNumero($peso)) {
                echo "<p class='text-danger font-weight-bold'>Error, no se ha introducido un valor numérico o el campo no se ha rellenado.</p>";
            } else if ($peso < 10 || $peso > 150) {
                echo "<p class='text-warning font-weight-bold'>El peso introducido no es válido.</p>";
            } else {
                echo "<p class='text-success font-weight-bold'>Peso: $peso</p>";
            }
        } else {
        ?>
            <form name="form2" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <!-- Campos para poner la edad -->
                <div class="form-group row">
                    <label for="edad" class="col-sm-2 col-form-label">Escriba su edad:</label>
                    <div class="col-sm-2">
                        <input type="text" min="5" max="130" class="form-control" name="edad">
                    </div>
                </div>
                <!-- Campos para poner el peso -->
                <div class="form-group row">
                    <label for="peso" class="col-sm-2 col-form-label">Escriba su peso:</label>
                    <div class="col-sm-2">
                        <input type="number" min="10" max="150" step="any" class="form-control" name="peso">
                    </div>
                </div>
                <!-- Botones para enviar y borrar -->
                <button type="submit" name="enviar" class="btn btn-outline-primary">Enviar</button>
                <button type="reset" class="btn btn-outline-danger">Borrar</button>
            </form>
        <?php } ?>
    </div>
</body>

</html>