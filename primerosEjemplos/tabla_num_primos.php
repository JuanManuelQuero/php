<!DOCTYPE html>
<html lang="en">
    <?php  
        function isPrimo($n) {
            if($n == 1) return true;
            for($i=2;$i<$n;$i++) {
                if($n%$i==0) return false;
            }
            return true;
        }

        function pintarCelda($n) {
            if(isPrimo($n)) {
                
            }
            
        }
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Tabla Funciones</title>
</head>
<body>
    <h3 class="text-center mt-3">Practica PHP</h3>
    <div class="container mt-3">
        <?php
            $num = 1;
            pintarTabla();
            
        
                
                
        ?>
    </div>
</body>
</html>