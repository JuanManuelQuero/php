<!DOCTYPE html>
<?php
require '../vendor/autoload.php';
use Carbon\Carbon;
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <title>Document</title>
</head>

<body style="background-color: darksalmon;">
    <h3 class="text-center my-3">Fechas de Prueba</h3>
    <div class="container">
        <?php
        echo "Hoy es: " .Carbon::now();
        echo "<p>Tienes: " .Carbon::createFromDate(1999, 07, 19) -> age. " años";
        ?>
    </div>

</body>

</html>