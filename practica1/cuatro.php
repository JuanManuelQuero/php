<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Ejercicio 4</title>
</head>
<body>
    <h3 class="text-center mt-3">Numeros primos mayor que 1000</h3>
    <div class="container mt-3">
        <?php
            $numInicio = 1;
            $num = 1100;
            $numRequeido = 1000;

            if($num >= $numRequeido) {
                for($i=$numInicio;$i<=$num;$i++) {
                    $aux = 0;
                    for($j=1;$j<=$i;$j++) {
                        if($i % $j == 0) {
                            $aux++;
                        }
                    }

                    if($aux == 2 or $i == 1) {
                        echo $i. ", "; 
                    }
                    
                }
            }else {
                echo "El numero $num es inferior al requerido '$numRequeido'.";
            }
        ?>
    </div>
</body>
</html>