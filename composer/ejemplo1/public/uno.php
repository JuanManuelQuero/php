<!DOCTYPE html>
<?php
    require "../vendor/autoload.php";
    $faker = Faker\Factory::create();
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
    <h3 class="text-center my-3">Datos de Prueba</h3>
    <div class="container">
    <table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">UUID</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Nombre</th>
      <th scope="col">Mail</th>
      <th scope="col">Ciudad</th>
    </tr>
  </thead>
  <tbody>
      <?php
      for($i=0;$i<100;$i++) {
          $apellido1 = $faker -> lastName;
          $apellido2 = $faker -> lastName;
          $nombre = $faker -> firstName;
          $usu = strtolower($apellido1). "." .strtolower($nombre);
        echo "<tr>";
        echo "<th scope='row'>{$faker->uuid}</th>";
        echo "<td>$apellido1, $apellido2</td>";
        echo "<td>$nombre</td>";
        echo "<td>$usu@{$faker -> freeEmailDomain}</td>";
        echo "<td>{$faker -> city}</td>";
        echo "</tr>";
      }
    ?>
  </tbody>
</table>
    </div>

</body>

</html>