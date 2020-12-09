<!DOCTYPE html>
<html lang="en">
    <?php
        function pintarTabla() {
            echo "<table align='center' border='2' cellpadding='5'>\n";
            for($i=0;$i<10;$i++) {
                if($i%2) {
                    pintarColumna("yellow");
                }else {
                    pintarColumna("orange");
                }
            }
        }

        function pintarColumna($color) {
            global $num;
            echo "<tr bgcolor='($color)' align='center'>\n";
            for($i=0;$i<10;$i++) {
                echo "<td>" .$num++. "</td>\n";
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