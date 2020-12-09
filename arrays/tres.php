<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Funciones de Arrays</title>
</head>
<body>
    <h3 class="text-center mt-3">Ejemplos Arrays PHP</h3>
    <div class="container mt-3">
        <?php
            //Arrays de mas de una dimension
            $tablero = [];
            $tablero[0] = ["Unos", "Dos", "Tres", 4];
            $tablero[1] = ["Cuatro", "cinco", "seis",7, 8];
            var_dump($tablero);
            echo "<br>";
            echo "<br>";
            //............Otra forma
            $tablero1 = array();
            $tablero1[0] = ["Unos", "Dos", "Tres", 4];
            $tablero1[1] = ["Cuatro", "cinco", "seis",7, 8];
            var_dump($tablero1);
            echo "<br>";
            echo "<br>";
            //mas para no aburrirnos
            $tablero2 = [
                ["Unos", "Dos", "Tres", 4],
                ["Cuatro", "cinco", "seis",7, 8]
            ];
            var_dump($tablero2);
            echo "<br>";
            echo "<br>";
            //Varias dimensiones y asociativos
            $comunidades = [
                "Andalucia" => ["Almeria", "Cadiz", "Cordoba", "Granada", "Huelva", "Jaen", "Sevilla"],
                "Extremadura" => ["Badajoz", "Caceres"]
            ];
            var_dump($comunidades);
            echo "<br>";
            echo "<br>";
            //....................................
            $and = ["Almeria", "Cadiz", "Cordoba", "Granada", "Huelva", "Jaen", "Sevilla"];
            $ext = ["Badajoz", "Caceres"];
            $comunidades1 = [
                "Andalucia" => $and,
                "Extremadura" => $ext
            ];
            var_dump($comunidades1);
            echo "<br>";
            echo "<br>";

            $comunidades2 = [$and, $ext];
            var_dump($comunidades2);
            echo "<br>";
            echo "<br>";
            //...................................................
            foreach($comunidades as $comu => $prov) {
                echo "$comu:<br>";
                foreach($prov as $k => $v) {
                    echo $v. ", ";
                }
                echo "<br>";
            }
        ?>
    </div>
</body>
</html>