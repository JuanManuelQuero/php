<!DOCTYPE html>
<html lang="en">
    <?php
        function prueba() {
            $nombre = "Pedro Santana";
        }

        function prueba1() {
            global $nombre;
            $nombre ="IES ALANDALUS";
        }

        //Array GLOBAL
        function prueba2() {
            $GLOBALS["nombre"] = "Te cambié el nombre";
        }

        function prueba3() {
            static $a=0;
            return ++$a;

        }
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Ejemplo 4</title>
</head>
<body>
    <h3 class="text-center mt-3">Ejemplos PHP</h3>
    <div class="container mt-3">
        <?php
            $nombre = "Juan Manuel";
            $edad = 21;
            echo "Antes de prueba() \$nombre=$nombre<br>";
            prueba();
            echo "Despues de prueba() \$nombre=$nombre<br>";

            echo "Antes de prueba1() \$nombre=$nombre<br>";
            prueba1();
            echo "Despues de prueba1() \$nombre=$nombre<br>";

            echo "Antes de prueba2() \$nombre=$nombre<br>";
            prueba2();
            echo "Despues de prueba2() \$nombre=$nombre<br>";

            echo "<br>";
            echo prueba3();
            echo "<br>";
            echo prueba3();
        ?>
    </div>
</body>
</html>