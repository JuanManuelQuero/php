<?php

use Proyecto\Prueba;

require "../src/ejemplo.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: #ebf5fb">
    <?php
        echo Proyecto\PI;
        echo Proyecto\saludo();
        $miPrueba = new Proyecto\Prueba();
        $miPrueba -> saludoClase("Juan");
    ?>
</body>
</html>