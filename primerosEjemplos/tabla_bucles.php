<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Tabla</title>
</head>
<body>
    <h3 class="text-center mt-3">Practica PHP</h3>
    <div class="container mt-3">
        <?php
        $filas = 5;
        $columnas = 6;
        echo "<table border=2 cellpadding=2 cellspacing=2 align='center'>\n";
            for($i=0;$i<$filas;$i++) {
                echo "<tr>\n";
                for($j=0;$j<$columnas;$j++) {
                    echo "<td>Celda($i)($j)</td>\n";
                }
                echo "<tr>\n";
            }
            echo "</table>\n";
            echo "<br><br><br>";

        //Tabla de multiplicar
        $num = 9;
        echo "<table align='center' border=2>\n";
        echo "<tr align='center'>\n";
        echo "<td colspan=5</b>Tabla del $num</b></td>\n";
        echo "</tr>";
        for($c=1;$c<=10;$c++) {
            echo "<tr align='center'>\n";
            echo "<td>$num</td>\n";
            echo "<td>X</td>\n";
            echo "<td>$c</td>\n";
            echo "<td>=</td>\n";
            echo "<td>" .$c * $num. "</td>\n";
            echo "</tr>\n";
        }
        echo "</table>\n";
        ?>
    </div>
</body>
</html>