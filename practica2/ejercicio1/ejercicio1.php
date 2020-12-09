<!DOCTYPE html>
<?php
    function comprobarCadena($c) {
        return strlen($c);
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Ejercicio 1</title>
</head>
<body style="background-color: #ebf5fb">
    <h3 class="text-center mt-3">Ejercicio 1</h3>
    <div class="container mt-3">
        <?php
            if(isset($_POST['enviar'])) {
                $nombre = trim($_POST['nombre']);
                $apellidos = trim($_POST['apellidos']);

                if(!comprobarCadena($nombre)) {
                    echo "<p class='text-danger font-weight-bold'>Error, rellene el campo.</p>";
                }else {
                    echo "<p class='text-success font-weight-bold'>Nombre: $nombre</p>";
                }

                if(!comprobarCadena($apellidos)) {
                    echo "<p class='text-danger font-weight-bold'>Error, rellene el campo.</p>";
                }else {
                    echo "<p class='text-success font-weight-bold'>Apellidos: $apellidos</p>";
                }
            }else {
        ?>
        <form name="form1" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <!-- Campo para poner el nombre -->
            <div class="form-group row">
                <label for="nombre" class="col-sm-2 col-form-label">Escriba su nombre:</label>
                <div class="col-sm-5">
                    <input type="name" class="form-control" name="nombre">
                </div>
            </div>
            <!-- Campo para poner los apellidos -->
            <div class="form-group row">
                <label for="apellidos" class="col-sm-2 col-form-label">Escriba sus apellidos:</label>
                <div class="col-sm-8">
                    <input type="name" class="form-control" name="apellidos">
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