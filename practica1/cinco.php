<!DOCTYPE html>
<?php
    function descomposion() {
        global $num;
        $exp = 10;
        for($i=strlen($num);$i>0;$i--) {
            echo (int)($num%pow($exp,$i)/pow($exp,$i-1));
            
            if($i>1){
                echo "*10";
                if($i>2){
                    echo "^".($i-1);
                }
                echo "+";
            }
        }
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Ejercicio 5</title>
</head>
<body>
    <h3 class="text-center mt-3">Descomposion en base 10, numero mayor que 1000</h3>
    <div class="container mt-3">
        <?php
            $num = 4567;
            $numMayor = 1000;

            if ($num > $numMayor) {
                descomposion();
            }else {
                echo "El numero a descomponer tiene que ser mayor o distinto de '$numMayor'";
            }

            

            
            
        
        ?>
    </div>
</body>
</html>