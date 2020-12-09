<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Ejercicio 5</title>
</head>

<body style="background-color: #ebf5fb">
    <h3 class="text-center mt-3">Ejercicio 5</h3>
    <div class="container mt-3">
        <form name="form5" action="action5.php" method="POST">
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
            <button type="submit" class="btn btn-outline-primary">Enviar</button>
            <button type="reset" class="btn btn-outline-danger">Borrar</button>
        </form>
    </div>
</body>
</html>