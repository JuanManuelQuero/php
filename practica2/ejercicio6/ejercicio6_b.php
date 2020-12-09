<!DOCTYPE html>
<?php
$colores = ["Rojo", "Azul", "Amarillo", "Verde", "Negro", "Naranja", "Blanco", "Gris", "Morado", "Marron"];
sort($colores);
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Ejercicio 6_b</title>
</head>

<body style="background-color: #ebf5fb">
    <h3 class="text-center mt-3">Ejercicio 6_b</h3>
    <div class="container mt-3">
        <?php
            if(isset($_POST['enviar'])) {
                if(isset($_POST['deportes'])) {
                    $deportes = $_POST['deportes'];
                    $misdeportes = "Los deportes que te gustan son " .count($deportes). " deportes: ";
                    foreach($deportes as $deporte) {
                        $misdeportes .= " $deporte";
                    }
                    echo "<p class='text-success font-weight-bold'>$misdeportes</p>";
                }else {
                    echo "<p class='text-danger font-weight-bold'>Error, no has seleccionado ningun deporte.</p>";
                }
    
                //Verificar si has hecho una seleccion multiple de los colores
                if(isset($_POST['colores'])) {
                    $miscolores = $_POST['colores'];
                    echo "<p class='text-success font-weight-bold'>Has elegido: " .count($miscolores). " colores: </p>";
                    echo "<ul>";
                    foreach($miscolores as $color) {
                        echo "<li class='text-primary font-weight-bold'>$color";
                    }
                    echo "</ul>";
                }else {
                    echo "<p class='text-danger font-weight-bold'>Error, no has seleccionado ningun color.</p>";
                }
            }else {
        ?>
        <form name="form6" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <!-- Marcar los deportes -->
            <div class="form-group row">
                <label for="deporte" class="col-sm-1 col-form-label"><strong>Deportes: </strong></label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="deportes[]" value="Fútbol">
                    Fútbol
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="deportes[]" value="Basket">
                    Basket
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="deportes[]" value="Beisbol">
                    Beisbol
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="deportes[]" value="Voleibol">
                    Voleibol
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="deportes[]" value="Rugby">
                    Rugby
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="deportes[]" value="Natación">
                    Natación
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="deportes[]" value="Atletismo">
                    Atletismo
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="deportes[]" value="Tenis">
                    Tenis
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="deportes[]" value="Padel">
                    Padel
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="deportes[]" value="Hockey">
                    Hockey
                </div>
            </div>
            <!-- Elegir varias opciones en un <option> -->
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="colores"><strong>Colores:</strong></label>
                    <select name="colores[]" multiple class="form-control">
                        <?php
                        foreach ($colores as $color) {
                            echo "<option>$color</option>";
                        }
                        ?>
                    </select>
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