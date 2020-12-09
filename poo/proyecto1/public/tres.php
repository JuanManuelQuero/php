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
    <title>POO_3</title>
</head>
<body style="background-color: #ebf5fb">
    <h3 class="text-center my-3">Ejemplo POO</h3>
    <div class="container my-3">
        <?php
            /*$tv1 = new Tv();
            $tv1 -> cod = 15000;
            $tv1 -> nombre = "TV Samsung 45 Pulgadas HCVXXDER";
            $tv1 -> nom_corto = "TV Samsung 45";
            $tv1 -> pvp = "1234.56";
            $tv1 -> pulgadas = "45";
            $tv1 -> resolucion = "4K";
            echo $tv1;*/
            $tele = new Tv(10000, "TV Samsung 45 Pulgadas HCVXXDER", "TV Samsung 45", 1234.56,  45, "4K");
            echo $tele;

            //1.- get_parent_class()
            echo "<br>".get_parent_class($tele);
            //2.- is_subclass_of()
            if(is_subclass_of($tele, "Articulo")) {
                echo "<br>Cierto";
            }
        ?>
    </div>
</body>
</html>