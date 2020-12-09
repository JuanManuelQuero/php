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
    <title>Action 5</title>
</head>
<body style="background-color: #ebf5fb">
    <h3 class="text-center mt-3">Validar datos</h3>
    <div class="container mt-3">
        <?php
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
        ?>
    </div>
</body>
</html>