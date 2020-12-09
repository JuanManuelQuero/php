<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Ejemplo 2</title>
</head>
<body>
    <h3 class="text-center mt-3">Ejemplos PHP</h3>
    <div class="container mt-3">
        <?php
            //Bucles.....................................................................
            //for()
            for($i=0;$i<10;$i++) {
                echo "Linea $i<br>".PHP_EOL;
            }

            //do while
            $i = 0;
            do {
                echo "Linea " .$i++. "<br>".PHP_EOL;
            }while($i<10);

            //while
            $i = 0;
            while($i<10) {
                echo "Linea " .$i++. "<br>".PHP_EOL;
            }
        ?>
    </div>
</body>
</html>