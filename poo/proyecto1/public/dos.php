<?php
    spl_autoload_register(function($clase) {
        require_once "../src//$clase.php";
    });

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>POO_2</title>
</head>

<body style="background-color: #ebf5fb">
    <h3 class="text-center my-3">Ejemplo POO</h3>
    <div class="container my-3">
        <?php
        $producto = new Producto(1200, "TV LG 45", 145);
        $copia = $producto;
        $copia->codigo = 234;
        echo $producto;

        //para tener una copia independiente
        $copia1 = clone($producto);
        $copia1 -> codigo = 150000;
        echo "<br>" .$producto;
        //.....................................................
        $producto2 = new Producto();
        echo $producto2;
        //.....................................................
        $persona1 = new Persona();
        echo $persona1;
        $persona2 = new Persona("Juan", "Fernandez");
        echo $persona2;
        $persona3 = new Persona("Juan", "Perez", 45);
        echo $persona3;
        echo "<br>He instanciado un total de ".Persona::$cont. " personas";
        //.......................................................
        Persona::incrementarPersona();
        ?>
    </div>
</body>

</html>