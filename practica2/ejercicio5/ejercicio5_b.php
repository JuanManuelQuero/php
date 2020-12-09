<!DOCTYPE html>
<?php
    function comprobarCadena($c) {
        return strlen($c);
    }

    function comprobarEdad($e) {
        return is_numeric($e);
    }

    function comprobarPeso($p) {
        return is_numeric($p);
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Ejercicio 5_b</title>
</head>

<body style="background-color: #ebf5fb">
    <h3 class="text-center mt-3">Ejercicio 5_b</h3>
    <div class="container mt-3">
        <?php
            if(isset($_POST['enviar'])) {
                //Verificar si se ha pasado el nombre y los apellidos
                $nombre = trim($_POST['nombre']);
                $apellidos = trim($_POST['apellidos']);
                if(!comprobarCadena($nombre)) {
                    echo "<p class='text-danger font-weight-bold'>Error, no se ha rellenado el campo nombre.</p>";
                }else {
                    echo "<p class='text-success font-weight-bold'>Nombre: $nombre</p>";
                }
                if(!comprobarCadena($apellidos)) {
                    echo "<p class='text-danger font-weight-bold'>Error, no se ha rellenado el campo apellidos.</p>";
                }else {
                    echo "<p class='text-success font-weight-bold'>Apellidos: $apellidos</p>";
                }

                //Verificar si se ha seleccionado la edad
                if(isset($_POST['edad'])) {
                    $edad = $_POST['edad'];
                    if(!comprobarEdad($edad)) {
                        echo "<p class='text-danger font-weight-bold'>Error, nos has rellenado el campo edad.</p>";
                    } else if ($edad < 5 || $edad > 130) {
                        echo "<p class='text-warning font-weight-bold'>La edad introducida no es válida.</p>";
                    } else {
                        echo "<p class='text-success font-weight-bold'>Edad: $edad</p>";
                    }
                }

                //Verificar si se ha puesto el peso
                if(isset($_POST['peso'])) {
                    $peso = $_POST['peso'];
                    if(!comprobarPeso($peso)) {
                        echo "<p class='text-danger font-weight-bold'>Error, no has rellenado el campo peso.</p>";
                    } else if ($peso < 10 || $peso > 150) {
                        echo "<p class='text-warning font-weight-bold'>El peso introducido no es válido.</p>";
                    } else {
                        echo "<p class='text-success font-weight-bold'>Peso: $peso</p>";
                    }
                }

                //Verificar si se ha seleccionado el sexo
                if(isset($_POST['sexo'])) {
                    $sexo = $_POST['sexo'];
                    echo "<p class='text-success font-weight-bold'>Sexo: $sexo</p>";
                }else {
                    echo "<p class='text-danger font-weight-bold'>Error, no se ha seleccionado el campo sexo.";
                }

                //Verificar si se ha seleccionado el estado civil
                if(isset($_POST['civil'])) {
                    $civil = $_POST['civil'];
                    echo "<p class='text-success font-weight-bold'>Estado civil: $civil</p>";
                }else {
                    echo "<p class='text-danger font-weight-bold'>Error, no se ha seleccioando el campo estado civil.";
                }

                //Verificar si se ha seleccionado alguna afición
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
            }else {
        ?>
        <form name="form5" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <p>Escriba los datos siguientes:</p>
            <!-- Primera fila -->
            <div class="form-row">
                <!-- Campo para introducir el nombre -->
                <div class="form-group col-md-4">
                    <label for="nombre"><strong>Nombre:</strong></label>
                    <input type="name" class="form-control" name="nombre">
                </div>
                <!-- Campo para introducir los apellidos -->
                <div class="form-group col-md-4">
                    <label for="apellidos"><strong>Apellidos:</strong></label>
                    <input type="name" class="form-control" name="apellidos">
                </div>
                <!-- Opción para seleccionar la edad -->
                <div class="form-group col-md-3">
                    <label for="edad"><strong>Edad:</strong></label>
                    <select name="edad" class="form-control">
                        <option value="not_select">...</option>
                        <?php
                        for ($i=1;$i<=140;$i++) {
                            echo "<option value='$i'>$i</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>
            <!-- Segunda fila -->
            <div class="form-row">
                <!-- Seleccionar peso -->
                <div class="form-group col-md-2">
                    <label for="peso"><strong>Peso:</strong></label>
                    <input type="number" min="10" max="150" step="any" class="form-control" name="peso">
                </div>
                <!-- Seleccionar sexo -->
                <div class="form-group col-md-2">
                    <label for="sexo"><strong>Sexo: </strong></label>
                    <div class="form-check form-check">
                        <input class="form-check-input" type="radio" name="sexo" value="Hombre">
                        <label class="form-check-label" for="sexo">Hombre</label>
                    </div>
                    <div class="form-check form-check">
                        <input class="form-check-input" type="radio" name="sexo" value="Mujer">
                        <label class="form-check-label" for="sexo">Mujer</label>
                    </div>
                </div>
                <!-- Seleccionar el estado civil -->
                <div class="form-group col-md-2">
                    <label for="sexo"><strong>Estado civil: </strong></label>
                    <div class="form-check form-check">
                        <input class="form-check-input" type="radio" name="civil" value="Soltero">
                        <label class="form-check-label" for="civil">Soltero</label>
                    </div>
                    <div class="form-check form-check">
                        <input class="form-check-input" type="radio" name="civil" value="Casado">
                        <label class="form-check-label" for="civil">Casado</label>
                    </div>
                    <div class="form-check form-check">
                        <input class="form-check-input" type="radio" name="civil" value="Otro">
                        <label class="form-check-label" for="civil">Otro</label>
                    </div>
                </div>
            </div>
            <!-- Seleccionar las aficiones -->
            <div class="form-group row">
                <label for="aficiones" class="col-sm-1 col-form-label"><strong>Aficiones: </strong></label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="aficiones[]" value="Cine">
                    Cine
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="aficiones[]" value="Literatura">
                    Literatura
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="aficiones[]" value="Tebeos">
                    Tebeos
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="aficiones[]" value="Deporte">
                    Deporte
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="aficiones[]" value="Música">
                    Música
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="aficiones[]" value="Televisión">
                    Televisión
                </div>
            </div>
            <!-- Botones para enviar o borrar -->
            <button type="submit" name="enviar" class="btn btn-outline-primary">Enviar</button>
            <button type="reset" class="btn btn-outline-danger">Borrar</button>
        </form>
                    <?php } ?>
    </div>
</body>
</html>