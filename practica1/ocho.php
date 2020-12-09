<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Ejercicio 8</title>
</head>
<body>
    <h3 class="text-center mt-3">Tabla 10x10</h3>
    <div class="container mt-3">
        <?php
            $num = 1;
            echo "<table align='center' border='2' cellpadding='7' cellspacing='5'>\n";
            for($i=0;$i<10;$i++) {
                echo "<tr>\n";
                for($j=0;$j<10;$j++) {
                    //Creo una variable $colorRan y con la funcion mt_rand para general colores aleatorios a la tabla
                    $colorRan=mt_rand($num,0xAAAAAA);
                    echo "<td bgcolor=$colorRan>".$num++."</td>\n";
                }
                echo "</tr>\n";
            }
            echo "</table>";
        ?>
    </div>
</body>
</html>