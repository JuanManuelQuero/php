<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Cadena 1</title>
</head>
<body>
    <h3 class="text-center mt-3">Ejemplos PHP</h3>
    <div class="container mt-3">
        <?php
            $cad1 = "hola mUndO, adios mundo";
            //La longitud de la cadena
            echo "<br>La longitud de \"$cad1\" es: " .strlen($cad1);

            //podemos recorrerlas con un for
            echo "<br>";
            for($i=0;$i<strlen($cad1);$i++) {
                echo $cad1[$i]. " - ";
            }

            //manipular cadenas
            echo "<br>Mayusculas<br>";
            echo strtoupper($cad1);

            echo "<br>Minusculas<br>";
            echo strtolower($cad1);

            echo "<br>Primera letra mayuscula<br>";
            echo ucfirst($cad1);

            echo "<br>Primera letra de cada palabra en mayuscula<br>";
            echo ucwords($cad1);
            //.....................................
            $cad2 = "    Hola Mundo ";
            $lcad2 = ltrim($cad2);
            $rcad2 = rtrim($cad2);
            $cad2Limpia = trim($cad2);
            echo "<br>";
            echo "La longitud de '{$cad2}' es: " .strlen($cad2);
            echo "<br>";
            echo "La longitud de '{$lcad2}' es: " .strlen($lcad2);
            echo "<br>";
            echo "La longitud de '{$rcad2}' es: " .strlen($rcad2);
            echo "<br>";
            echo "La longitud de '{$cad2}' es: " .strlen($cad2Limpia);

            //Rellenar cadenas
            $cad3 = "Hola Mundo";
            $cadenaRellena = str_pad($cad3, 30, "@", STR_PAD_LEFT);
            echo "<br>$cadenaRellena";
            $cadenaRellena = str_pad($cad3, 30, "@", STR_PAD_RIGHT);
            echo "<br>$cadenaRellena";
            $cadenaRellena = str_pad($cad3, 30, "@", STR_PAD_BOTH);
            echo "<br>$cadenaRellena";

            //Algunas funciones de busqueda dentro de cadenas
            echo "<br>";
            $mail1 = "micorreo@gmail.com";
            //veamos la posicion de la arroba (por ejemplo)
            echo "@ esta en la posicion: " .strpos($mail1, "@");
            //me devuelve la subcadena desde el caracter buscado al final
            echo "<br>";
            echo strstr($mail1, "@");
            //..............strpos vs strrpos
            $cad = "Hola Mundo";
            echo "<br>La primera aparicion de o es: " .strpos($cad, "o");
            echo "<br>La ultima aparicion de o es: " .strrpos($cad, "o");
            
            //reemplazar caracteres str_replace
            $cadena = "Manuel Fernandez Gines";
            echo "<br>\$cadena= " .$cadena;
            echo "<br>" .str_replace(" ", "_", $cadena);
            echo "<br>" .str_replace(" ", "_", strtolower($cadena));

        ?>
    </div>
</body>
</html>