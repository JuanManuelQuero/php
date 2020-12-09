<!DOCTYPE html>
    <?php
        function verArray($a) {
            echo "<hr>";
            foreach($a as $k => $v) {
                echo "'{$k}' ===> <span class='text-danger'>'{$v}'</span><br>";
            };
        }
    ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Arrays 2</title>
</head>
<body>
    <h3 class="text-center mt-3">Arrays PHP</h3>
    <div class="container mt-3">
        <?php
            $frutas1 = [
                "uno" => "Pera",
                "dos" => "Melocoton",
                "tres" => "Avellana",
                "cuatro" => "Zruta",
                "als" => "Naranja",
                "bios" => "Frambuesa",
            ];

            $frutas2 = [
                "uno" => "Pera",
                "dos" => "Melocoton",
                "tres" => "Avellana",
                "cuatro" => "Zruta",
                "als" => "Naranja",
                "bios" => "Frambuesa",
            ];
            
            $frutas3 = [
                "uno" => "Pera",
                "dos" => "Melocoton",
                "tres" => "Avellana",
                "cuatro" => "Zruta",
                "als" => "Naranja",
                "bios" => "Frambuesa",
            ];

            $frutas4 = [
                "uno" => "Pera",
                "dos" => "Melocoton",
                "tres" => "Avellana",
                "cuatro" => "Zruta",
                "als" => "Naranja",
                "bios" => "Frambuesa",
            ];

            $frutas5 = [
                "uno" => "Pera",
                "dos" => "Melocoton",
                "tres" => "Avellana",
                "cuatro" => "Zruta",
                "als" => "Naranja",
                "bios" => "Frambuesa",
            ];

            $frutas6 = [
                "uno" => "Pera",
                "dos" => "Melocoton",
                "tres" => "Avellana",
                "cuatro" => "Zruta",
                "als" => "Naranja",
                "bios" => "Frambuesa",
            ];

            //Metodo de Ordenacion de Arrays
            echo "Array Original<br>";
            verArray($frutas1);
            sort($frutas1);
            echo "<br>Array ordenado con sort()<br>";
            verArray($frutas1);
            echo "<br><br><br>";

            //.............rsort
            echo "Array Original<br>";
            verArray($frutas2);
            rsort($frutas2);
            echo "<br>Array ordenado con rsort()<br>";
            verArray($frutas2);
            echo "<br><br><br>";

            //.............asort
            echo "Array Original<br>";
            verArray($frutas3);
            asort($frutas3);
            echo "<br>Array ordenado con asort()<br>";
            verArray($frutas3);
            echo "<br><br><br>";

            //.............arsort
            echo "Array Original<br>";
            verArray($frutas4);
            arsort($frutas4);
            echo "<br>Array ordenado con arsort()<br>";
            verArray($frutas4);
            echo "<br><br><br>";

            //.............ksort
            echo "Array Original<br>";
            verArray($frutas5);
            ksort($frutas5);
            echo "<br>Array ordenado con ksort()<br>";
            verArray($frutas5);
            echo "<br><br><br>";

            //.............krsort
            echo "Array Original<br>";
            verArray($frutas6);
            krsort($frutas6);
            echo "<br>Array ordenado con krsort()<br>";
            verArray($frutas6);
            echo "<br><br><br>";
        ?>
    </div>
</body>
</html>