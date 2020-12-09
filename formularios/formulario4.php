<!DOCTYPE html>
<?php
    $paises = ["España", "Alemania", "Francia", "Portugal", "Polonia", "Suiza", "Finlandia"];
    sort($paises);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Formulario 4</title>
</head>
<body style="background-color: lightgrey">
    <h3 class="text-center mt-3">Formularios PHP</h3>
    <div class="container mt-3">
        <?php
            if(isset($_POST['enviar'])) {
                if(isset($_POST['paises'])) {
                    $misPaises = $_POST['paises'];
                    echo "<p>Has elegido: " .count($misPaises). " paises, estos son: </p>";
                    echo "<ul>";
                    foreach($misPaises as $pais) {
                        echo "<li>$pais";
                    }
                    echo "</ul>";
                }else {
                    echo "<p class='text-danger'>No has elegido ningun pais</p>";
                }
                echo "<a href='".$_SERVER['PHP_SELF']. "'class='btn btn-warning mt-3'>Volver</a>";
            }else {
        ?>
        <form name="form1" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="form-group">
                <label for="exampleFormControlSelect2">Example multiple select</label>
                <select multiple class="form-control" id="lista" name="paises[]">
                    <?php
                        foreach($paises as $pais) {
                            echo "<option>$pais</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <input type="submit" value="Enviar" name="enviar" class="btn btn-primary">
            </div>
        </form>
                    <?php } ?>
    </div>
</body>
</html>