<?php
    require "../src/Internacional/Articulo.php";
    require "../src/Nacional/Articulo.php";

    use Src\Nacional;
    use Src\Internacional;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: #ebf5fb">
    <?php
        $art1 = new Internacional\Articulo();
        $art1 -> decirNamespace();
        
        //...........................................................

        $art2 = new Nacional\Articulo();
        $art2 -> decirNamespace();
    ?>
</body>
</html>