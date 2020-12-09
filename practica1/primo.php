<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Ejercicio 2</title>
</head>
<body>
    <h3 class="text-center mt-3">Numero primo</h3>
    <div class="container mt-3">
        <?php
            $num = 5;
            $primo = 0;
             
            for ($i=1;$i<$num;$i++) {
                if ($num % $i == 0) {
                    $primo++;
                }
            }
             
            if ($primo >= 2) {
                echo "El numero $num no es primo";
            } else {
                echo "El numero $num es primo";
            }
        ?>
    </div>
</body>
</html>