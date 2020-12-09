<!DOCTYPE html>
<html lang="es">
<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location:index.php");
} else {
    if ($_SESSION['perfil'] != 0) {
        header("Location:sitio.php");
    }
}

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <title>Document</title>
</head>

<body style="background-color:cadetblue">
    <nav class="navbar navbar-light bg-light m-4">
        <a class="navbar-brand">Ventas S.A.</a>
        <form class="form-inline" action="cerrar.php">


            <input class='form-control bg-danger text-light font-weight-bold mr-2' value='<?php echo $_SESSION['usuario'] ?>' disabled='true'>

            <button class="btn btn-warning" type="submit"><i class="fa fa-sign-out-alt" aria-hidden="true"></i>
            </button>
        </form>
    </nav>
    <h3 class="text-center my-3">Sitio del Administrador</h3>
    <div class="form-group col-md-2">
        <label class="ml-5">Usuarios</label>
        <select id="inputState" class="form-control ml-5">
            <?php
            $usuario = trim($_POST['usuario']);
            $email = trim($_POST['email']);
            $pass = trim($_POST['pass']);
            
            $file = fopen("usuarios.txt", "r");
            $datos = [$usuario, $pass, $email];

            while(!feof($file)) {
                $datos = explode('::', fgets($file));
                echo "<option>$datos[2]</option>";
            }
            fclose($file);
            ?>
        </select>
    </div>

    <div class="container">
        <button type="submit" class="btn btn-dark ml-5"><i class="fas fa-trash-alt mr-2"></i>Borrar</button>
        <a href="sitio.php" class="btn btn-primary"><i class="fas fa-home mr-3"></i>Volver</a>
    </div>
</body>

</html>