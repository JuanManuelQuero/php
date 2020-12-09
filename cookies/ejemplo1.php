<!DOCTYPE html>
<?php
    $fecha = new DateTime("now");
    $miFecha = $fecha -> format("d/m/Y H:i:s");
    if(isset($_COOKIE['visita'])) {
        //Ya he visitado la página alguna vez
        //muestra la fecha de la última visita y actualizo la cookie
        $mensaje = $_COOKIE['visita'];
        $contador = (int)($_COOKIE['contador']) + 1;
        $mensajeCont = $contador;
        setcookie('contador', $contador, time()+30*24*3600);
        setcookie('visita', $miFecha, time()+30*24*3600);
    }else {
        //Es la primera vez, muestro primera vez
        //y creo la cookie
        $mensaje = "No has visitado la página nunca";
        $mensajeCont = 1;
        setcookie('contador', "1", time()+30*24*3600);
        setcookie('visita', $miFecha, time()+30*24*3600);
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Ejemplo Cookies 1</title>
</head>
<body style="background-color: #ebf5fb">
    <h3 class="text-center mt-3">Cookies PHP</h3>
    <div class="container mt-3">
        <?php
            echo "<p class='font-weight-bold'>Visitaste la página por última vez: $mensaje</p>";
            echo "<p class='font-weight-bold'>Has visitado la página un total de: $mensajeCont veces</p>";
        ?>
    </div>
</body>
</html>