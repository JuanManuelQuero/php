<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Arrays 1</title>
</head>
<body>
    <h3 class="text-center mt-3">Arrays PHP</h3>
    <div class="container mt-3">
        <?php
            //Arrays dos formas de definirlos
            //1.- La clasica
            $nombres = array();
            $nombres[] = "Juan Andres";
            $nombres[] = "Perico Lopez";
            $nombres[] = "Pedro Flores";
            echo "<br><br><br><br><br>";
            //..............................
            var_dump($nombres);
            echo "<br><br><br><br><br>";
            //..............................
            $frutas = array("Limon", "Pera", "Melon", "Naranja");
            echo "<br>";
            var_dump($frutas);
            $frutas[] = "Mandarinas";
            echo "<br>";
            var_dump($frutas);
            echo "<br><br><br><br><br>";
            //..............................
            echo "<br>";
            print_r($frutas);
            echo "<br><br><br><br><br>";
            //..............................
            $frutas[10] = "Sandia";
            $frutas[] = "Pomelo";
            echo "<br>";
            var_dump($frutas);
            $frutas[5] = "Melocoton";
            echo "<br>";
            var_dump($frutas);
            $frutas[] = "Mango";
            echo "<br>";
            var_dump($frutas);
            echo "<br><br><br><br><br>";
            //...............................
            //2.- No es necesario utilizar la palabra array()
            $marcas = [];
            $marcas[] = "Seat";
            $marcas[] = "Renault";
            $marcas[] = "Toyota";
            echo "<br>";
            var_dump($marcas);
            $modelos = ["Ibiza", "Toledo", "Ateca"];
            echo "<br>";
            var_dump($modelos);
            $modelos[] = "Otro modelo";
            echo "<br>";
            var_dump($modelos);
            echo "<br><br><br><br><br>";
            //.........Arrays Asociativos (clave=>valor)
            $frutas1 = [
                "primera" => "Sandia",
                "segunda" => "pera",
                "tercera" => "naranja"
            ];
            $frutas1["cuarta"] = "fresa";
            $frutas1[] = "Otra fruta";
            echo "<br>";
            var_dump($frutas1);
            echo "<br>";
            print_r($frutas1);
            echo "<br><br><br><br><br>";
            //.......................................
            $marcas1 = array(
                "primera" => "Seat",
                "segunda" => "Mazda",
            );
            $marcas1["tercera"] = "Renault";
            echo "<br>";
            var_dump($marcas1);
            echo "<br><br><br><br><br>";
            //.........................................
            echo "La longitud del array de \$frutas1 es: " .count($frutas1);
            echo "<br><br><br><br><br>";
            //.........................................
            //Formas de recorrer un array
            foreach($nombres as $item) {
                echo "$item<br>";
            };
            echo "<br><br><br><br><br>";

            foreach($marcas as $item) {
                echo "$item<br>";
            };
            echo "<br><br><br><br><br>";

            foreach($frutas as $item) {
                echo "$item<br>";
            };
            echo "<br><br><br><br><br>";
            //.........................................
            foreach($frutas1 as $item) {
                echo "$item<br>";
            };
            echo "<br><br><br><br><br>";
            //Mostrarndo claves y valores
            foreach($frutas1 as $k=>$v) {
                echo "Clave=$k, Valor=$v<br>";
            };
            echo "<br><br><br><br><br>";

            foreach($nombres as $k=>$v) {
                echo "Clave=$k, Valor=$v<br>";
            };
            echo "<br><br><br><br><br>";
            //..................reescribimos frutas1
            $i = 1;
            foreach($frutas1 as $k => $v) {
                $frutas1[$k] = "Fruta_" .$i++;
            };
            echo "<br>";
            var_dump($frutas1);




        ?>
    </div>
</body>
</html>