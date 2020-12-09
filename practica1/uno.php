<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Ejercicio 1</title>
</head>
<body>
    <h3 class="text-center mt-3">Tabla del 3</h3>
    <div class="container mt-3">
        <?php
            $num = 3;
            echo "<table align='center' border='2' cellpadding='5' cellspacing='5'>\n";
            echo "<tr align='center'>\n";
            echo "<td colspan=5</b><strong>Tabla de Multiplicar del $num</strong></b></td>\n";
            echo "</tr>";
            for($i=0;$i<10;$i++) {
                $color;
                if($i%2 == 0) {
                    $color = "white";
                }else {
                    $color = "#a3ff33";
                }
                $cont = $i+1;
                echo "<tr align='center' bgcolor=$color>\n";
                echo "<td>$num</td>\n";
                echo "<td>X</td>\n";
                echo "<td>$cont</td>\n";
                echo "<td>=</td>\n";
                echo "<td>" .$cont * $num. "</td>\n";
                echo "</tr>\n";
            }
            echo "</table>\n";
        ?>
    </div>
</body>
</html>