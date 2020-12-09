<!DOCTYPE html>
<?php
function comprobarEmail($c)
{
    return (filter_var($c, FILTER_VALIDATE_EMAIL)) ? 1 : 0;
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Ejercicio 4</title>
</head>

<body style="background-color: #ebf5fb">
    <h3 class="text-center mt-3">Ejercicio 4</h3>
    <div class="container mt-3">
        <?php
        if (isset($_POST['enviar'])) {
            $email1 = trim($_POST['email1']);
            $email2 = trim($_POST['email2']);

            if (!comprobarEmail($email1)) {
                echo "<p class='text-danger font-weight-bold'>Error, no se ha introducido el email.</p>";
            }
            if (filter_var($email1, FILTER_VALIDATE_EMAIL) == null || filter_var($email2, FILTER_VALIDATE_EMAIL) == null) {
                echo "<p class='text-danger font-weight-bold'>Error, los correos no son validos.</p>";
            } else {
                if ($email1 == $email2) {
                    echo "<p class='text-success font-weight-bold'>Los correos coinciden.</p>";
                } else {
                    echo "<p class='text-warning font-weight-bold'>Los correos no coinciden.</p>";
                }
            }

            if (isset($_POST['recibir'])) {
                $opcion = $_POST['recibir'];
                if ($opcion == '...') {
                    echo "<p class='text-danger font-weight-bold'>No has seleccionado ninguna opción.</p>";
                } else if ($opcion == 'Si') {
                    echo "<p class='text-success font-weight-bold'>Recibiran ofertas de nuestra parte</p>";
                } else if ($opcion == 'No') {
                    echo "<p class='text-success font-weight-bold'>No recibiras ninguna oferta.</p>";
                }
            }
        }else {
        ?>
        <form name="form1" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <!-- Campo para poner el correo -->
            <div class="form-group row">
                <label for="email" class="col-sm-3 col-form-label">Indique su dirección de correo:</label>
                <div class="col-sm-5">
                    <input type="email" class="form-control" name="email1">
                </div>
            </div>
            <!-- Campo para confirmar el correo -->
            <div class="form-group row">
                <label for="email" class="col-sm-3 col-form-label">Confirme su dirección de correo:</label>
                <div class="col-sm-5">
                    <input type="email" class="form-control" name="email2">
                </div>
            </div>
            <!-- Campo para seleccionar si queremos recibir correos -->
            <div class="form-group row">
                <label for="opcion" class="col-sm-4 col-form-label">Indique si quiere recibir correos nuestros:</label>
                <div class="col-sm-1">
                    <select class="form-control" id="exampleFormControlSelect1" name="recibir">
                        <option>...</option>
                        <option>Si</option>
                        <option>No</option>
                    </select>
                </div>
            </div>
            <!-- Botones de enviar y borrar -->
            <button type="submit" name="enviar" class="btn btn-outline-primary">Enviar</button>
            <button type="reset" class="btn btn-outline-danger">Borrar</button>
        </form>
        <?php } ?>
    </div>
</body>

</html>