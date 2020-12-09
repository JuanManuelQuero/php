<!DOCTYPE html>
<?php
    function comprobarCadena($c) {
        return strlen($c);  //devolvemos la longitud si es 0 es como false
    }

    function error($texto){
        echo "<p class='text-danger'>Error, rellene el campo $texto</p>";
    }

    function mostrar($texto){
        echo "<p class='text-success font-weight-bold'>$texto</p>";
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Action 2</title>
</head>
<body>
    <h3 class="text-center mt-3"></h3>
    <div class="container mt-3">
        <?php
            //procesar lo que me venga del formulario
            $nombre = trim($_POST['nombre']);
            $apellidos = trim($_POST['apellidos']);
            if(isset($_POST['edad'])) {
                $edad=$_POST['edad'];
                if($edad == -1) {
                    mostrar("Menor de edad");
                }else {
                    mostrar("Mayor de edad");
                }
            }
            if(isset($_POST['idiomas'])) {
                $idiomas = $_POST['idiomas'];
                $misidiomas = "Has elegido " .count($idiomas). " idiomas: ";
                foreach($idiomas as $idioma) {
                    $misidiomas .= " $idioma";
                }
                mostrar($misidiomas);
            }
            if(!comprobarCadena($nombre)) {
                error("nombre");
            }else {
                mostrar($nombre);
            }
            if(!comprobarCadena($apellidos)) {
                error("apellidos");
            }else {
                mostrar($apellidos);
            }

            //echo "<br>";
            //echo var_dump($_POST);
        ?>
    </div>
</body>
</html>