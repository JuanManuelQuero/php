<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Formulario 5</title>
</head>
<body style="background-color: lightgrey">
    <h3 class="text-center mt-3">Formularios PHP</h3>
    <div class="container mt-3">
        <?php
            if(isset($_GET['num1'])) {
                echo "La variable num1 pasada por GET es igual a: " .$_GET['num1'];
            }else {
                echo "No has pasado num1 por GET!!!!";
            }
        ?>
        <br><br>
        <a href='<?php echo $_SERVER['PHP_SELF']. '?num1=56' ?>' class="btn btn-warning">
        Pasar 56</a>
        <br>
        <a href='<?php echo $_SERVER['PHP_SELF'] ?>' class="btn btn-warning">
        No pasar valor</a>
    </div>
</body>
</html>