<!DOCTYPE html>
<?php
    $b = "Vuelve a ser b";
    /*function saludo() {
        echo "<br>Hola Mundo";
    }

    function saludo1(String $n) {
        echo "Me ha llegado un parametro de tipo: " .gettype($n);
        echo "<br>Hola $n<br>";
    }

    function saludo2($n) {
        return ;
    }

    function saludo3($n="Sin nombre") {
        echo "<br>Hola $n";
    }

    function saludo4($n="Sin nombre", $e="Sin edad") {
        echo "Tu nombre es $n<br>";
        echo "Tu edad es $e<br>";
    }*/

    //Fucniones con un numero variable de parametro
    function saludo5() {
        $num=func_num_args();
        echo "<br>Has pasado $num argumentos";
        for($i=0;$i<$num;$i++) {
            echo "<br>El argumento $i es: " .func_get_arg($i);
        }
    }

    function saludo6(... $parametros) {
        echo "<br>";
        var_dump($parametros);
        echo "<br>";
        $parametros[0];
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Ejemplo 3</title>
</head>
<body>
    <h3 class="text-center mt-3">Ejemplos PHP</h3>
    <div class="container mt-3">
        <?php
            /*$a = "Variablea a";
            echo "La variable \$a=$a<br>";
            echo "la variable \$b=$b<br>";
            saludo();
            saludo1();
            $nombre = "Juan";
            $saludo("Pedro");
            $saludo1($nombre);
            $saludo2($nombre);

            echo saludo3($nombre);
            echo saludo3();

            saludo4("Juan", 21);
            saludo4();
            saludo4("Manolo");
            saludo4(21);*/

            saludo5("Hola", 21, "Almeria");
            saludo5();
            saludo5("Pedro", 21.45, "Almeria", "España");

            saludo6("Hola", 21, "Almeria");
            saludo6();
            saludo6("Pedro", 21.45, "Almeria", "España");
        ?>
    </div>
</body>
</html>