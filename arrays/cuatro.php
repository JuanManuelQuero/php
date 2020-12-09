<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Arrays</title>
</head>
<body>
    <h3 class="text-center mt-3">Ejemplos Arrays PHP</h3>
    <div class="container mt-3">
        <?php
            //............Algunas funciones usuales con Arrays
            //1.- compact
            $a = ["ciudad1", "ciudad2", "ciudad3"];
            $b = ["Juan", "manolo"];
            $c = compact('a', 'b');
            echo "<br>=========<<< <<compact>>> <<<==========<br>";
            var_dump($c);

            //2.- implode y explode
            //2.1 implode convierte arrays a string (no es la panacea)
            $cadena = implode(", ", $a);
            echo "<br>\$cadena = $cadena";

            //2.2 explode convierte una cadena en un array
            $user = "usuario:x:1000:1000:usuario:/home/usuario:/bin/bash";
            $arrayUser = explode(":", $user);
            echo "<br>Explode<br>";
            var_dump($arrayUser);
            echo "<br>";
            foreach($arrayUser as $v) {
                echo "$v   ";
            }
            $ejemplo = "Fernandez Lucas, Manuel";
            $array1 = explode(", ", $ejemplo);
            echo "<br>";
            var_dump($array1);

            //3.- list asigna elementos de un array a variables solo con arrays NUMERICOS
            $comida = ["tostada", "lentejas", "sandwich"];
            list($desayuno, $comida, $cena) = $comida;
            echo "<br>$desayuno";
            echo "<br>$comida";
            echo "<br>$cena";

            //se suele usar conjuntamente con explode
            $nomCompleto = "Fernandez Lucas, Manuel";
            list($apellidos, $nombre) = explode(", ", $nomCompleto);
            echo "<br>$apellidos";
            echo "<br>$nombre";

            //4.- in_array()
            $tiposMimeImagen = ["image/gif", "image/x-icon", "image/jpe", "image/svg+xml", "image/tiff"];
            $miArchivo = "application/pdf";
            $miArchivo1 = "image/gif";
            if(in_array($miArchivo,$tiposMimeImagen)) {
                echo "<br>Archivo válido";
            }else {
                echo "<br>Formato invalido, debes subir un archivo de imagen";
            }
            if(in_array($miArchivo1,$tiposMimeImagen)) {
                echo "<br>Archivo válido";
            }else {
                echo "<br>Formato invalido, debes subir un archivo de imagen";
            }

            //range me crea un vector en un rango
            $vector = range(0, 100);
            echo "<br>";
            var_dump($vector);

            //shuffle desordena un array
            $vector1 = range(1, 6);
            echo "<br>";
            shuffle($vector1);
            foreach($vector1 as $v) {
                echo "   $v   ";
            };
            //.......................................................
            $and1 = ["Almeria", "Cadiz", "Cordoba", "Granada", "Huelva", "Jaen", "Sevilla"];
            echo "<br>";
            shuffle($and1);
            foreach($and1 as $v) {
                echo "   $v   ";
            };

            //array_slice nos quedamos con un trozo de un array
            $and2 = ["Almeria", "Cadiz", "Cordoba", "Granada", "Huelva", "Jaen", "Sevilla"];
            $prov = array_slice($and2, 0, 3);
            echo "<br>";
            var_dump($prov);

            $prov = array_slice($and2, 1, 4);
            echo "<br>";
            var_dump($prov);
            
            //array_fill crea un array como "range" pero puede meter cadenas
            $prueba = array_fill(0, 6, "Cadena");
            $prueba1 = array_fill(3, 6, "Cadena");
            echo "<br>";
            var_dump($prueba);
            echo "<br>";
            var_dump($prueba1);

            //Otras funciones interesantes
            //para que echeis un vistazo
            //arrat_search(), array_sum(), array_values(), array_keys()
            
        ?>
    </div>
</body>
</html>