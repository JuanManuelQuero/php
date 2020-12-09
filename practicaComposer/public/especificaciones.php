<!DOCTYPE html>
<?php
require "../vendor/autoload.php";

$faker = \Faker\Factory::create();
$faker->addProvider(new \Bezhanov\Faker\Provider\Device($faker));
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
</head>

<body style="background-color: darksalmon;">
    <h3 class="text-center my-3">Especificaciones de moviles</h3>
    <div class="container">
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">Número de Serie</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Plataforma</th>
                    <th scope="col">Versión</th>
                </tr>
            </thead>
            <tbody>
                <?php
                for ($i = 0; $i < 20; $i++) {

                    $serie = $faker->deviceSerialNumber;
                    $marca = $faker->deviceManufacturer;
                    $modelo = $faker->deviceModelName;
                    $plataforma = $faker->devicePlatform;
                    $version = $faker->deviceVersion;

                    echo "<tr>";
                    echo "<th scope='row'>$serie</th>";
                    echo "<td>$marca</td>";
                    echo "<td>$modelo</td>";
                    echo "<td>$plataforma</td>";
                    echo "<td>$version</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>