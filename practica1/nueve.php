<!DOCTYPE html>
<?php
    function noValido() {
        global $a, $b, $c;
        if(($c-$b)/$a != 0 && $c != $b) {
            return false;
        }
        return true;
    }


    function lineal() {
        global $a, $b, $c;
        $solucion = ($c-$b)/$a;
        echo "<br>La solucion es: " .$solucion;
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
    <h3 class="text-center mt-3">Ecuacion lineal</h3>
    <div class="container mt-3">
        <?php
            $a = 2;
            $b = 3;
            $c = 3;

            if(noValido($a, $b, $c)) {
                echo "Los valores no son validos";
            }else {
                lineal();
            }
            
        ?>
    </div>
</body>
</html>