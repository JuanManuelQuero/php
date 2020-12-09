<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Ejemplo 1</title>
</head>
<body>
    <h3 class="text-center mt-3">Ejemplos PHP</h3>
    <div class="container mt-3">
    <?php
        echo "Hola Mundo\n";
        echo '<br>Hola otra vez\n';
        //Comentario de una linea
        /*Varias lineas
        otra
        otra
        */

        //Variables........................................................................
        $nombre = "Juanma";
        $edad = 21;

        echo "<br>El nombre es $nombre".PHP_EOL; //Con comillas doble muestra el valor de la variable
        echo '<br>El nombre es $nombre'; //Con comillas simples no muestra el valor de la variable
        echo "<br>\"Entrecomillado\"";

        //Concatenar........................................................................
        echo '<br>Hola ' .$nombre. ' tu edad es ' .$edad.PHP_EOL;
        $apellidos = "Quero Gomez";
        $nombreCompleto = $apellidos. ", " .$nombre;
        echo "<br>";
        echo $nombreCompleto;

        //gettype();
        echo "<br>La variable \$nombre es de tipo: " .gettype($nombre);
        $nombre = 21;
        echo "<br>La variable \$nombre es de tipo: " .gettype($nombre);
        $nombre = 21.5;
        echo "<br>La variable \$nombre es de tipo: " .gettype($nombre);
        $nombre = "21.5";
        echo "<br>La variable \$nombre es de tipo: " .gettype($nombre);
        echo $res = $nombre + $edad;
        echo "<br>\$res = $res";
        echo "<br>La variable \$res de tipo: " .gettype($res);
    ?>
    </div>
</body>
</html>