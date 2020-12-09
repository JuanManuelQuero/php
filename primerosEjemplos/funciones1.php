<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Ejemplo 2</title>
</head>
<body>
    <h3 class="text-center mt-3">Ejemplos PHP</h3>
    <div class="container mt-3">
        <?php
            //funciones que no necesitan ningun nombre
            $saludo = function($n) {
                return "Hola. Te estoy saludando, soy $n<br>";
            };
            //usamos la funcion anterior
            echo $saludo("Juanma");

            //otra forma de usar este tipo de funciones anonimas es
            function decir($texto) {
                echo "<br>" .$texto("Juanma");
            }
            decir(function($n) {
                return "<br>Te estoy saludando desde una funcion anonima, soy $n";
            });
        ?>
    </div>
</body>
</html>