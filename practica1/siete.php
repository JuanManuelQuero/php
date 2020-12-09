<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Ejercicio 7</title>
</head>
<body>
    <h3 class="text-center mt-3">Divisores de un numero</h3>
    <div class="container mt-3">
        <?php
            $num = 4;
            $contar = 0;
            $eliminarComa = '';

            for($i=1;$i<=$num;$i++) {
                if($num%$i == 0) {
                    $eliminarComa .= $i. ", ";
                    $contar++;
                }
            }
            
            echo rtrim($eliminarComa, ', ');
            echo "<br>'$num' tiene $contar divisores.";

        ?>
    </div>
</body>
</html>