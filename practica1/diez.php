<!DOCTYPE html>
<?php
    function isNegativo() {
        global $a, $b, $c;
        if($b*$b-4*$a*$c<0) {
            return true;
        }
        return false;
    }

    function calcularSolucion() {
        global $a, $b, $c;
        $sol1=(-$b+sqrt($b*$b-4*$a*$c))/2*$a;
        $sol2=(-$b-sqrt($b*$b-4*$a*$c))/2*$a;
        echo "<br>La solucion 1 es: " .$sol1;
        echo "<br>La solucion 2 es: " .$sol2;
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Ejercicio 10</title>
</head>
<body>
    <h3 class="text-center mt-3">Ecuacion de segundo grado</h3>
    <div class="container mt-3">
        <?php
            $a = 1;
            $b = 1;
            $c = -6;

            if(isNegativo($a, $b, $c) ){
                echo "El dicriminante es Negativo, no hay solucion!!!";
            }else {
                calcularSolucion();
            }

        ?>
    </div>
</body>
</html>