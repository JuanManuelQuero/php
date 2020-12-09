<!DOCTYPE html>
<html lang="es">
<?php
session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <title>Registro</title>
</head>

<body style="background-color:cadetblue">
    <div class="container mt-5">
        <?php
        if (isset($_POST['registro'])) {
            $usuario = trim($_POST['usuario']);
            $email = trim($_POST['email']);
            $pass = trim($_POST['pass']);
            $cifrar = hash('sha256', $pass);


            $file = fopen("usuarios.txt", "r");
            $datos = [$usuario, $pass, $email];
            while (!feof($file)) {
                $datos = explode('::', fgets($file));
                if (trim($datos[0]) == $usuario || trim($datos[2]) == $email) {
                    $_SESSION['error'] = "El nombre o email ya existen.";
                    fclose($file);
                    header('Location:registro.php');
                    die();
                }
            }

            if (!$fp = fopen('usuarios.txt', 'r')) die("Error al leer el fichero");
            $file = "usuarios.txt";
            $fp = fopen($file, "r");
            $contents = fread($fp, filesize($file));
            fclose($fp);

            $file = fopen("usuarios.txt", "a");
            fputs($file, PHP_EOL);
            fputs($file, "$usuario::");
            fputs($file, "$cifrar::");
            fputs($file, "$email::1");
            fclose($file);
            header('Location:sitio.php');
            die();
        } else {
            if (isset($_SESSION['error'])) {
                echo "<p class='my-3 text-danger font-weight-bold'>{$_SESSION['error']}</p>";
                unset($_SESSION['error']);
            }

        ?>
            <div class="card text-white bg-secondary mb-3 mx-auto" style="max-width:619px;">
                <div class="card-header text-center font-weight-bold" style="font-size:x-large;">Registro</div>
                <div class="card-body">
                    <form name="f1" action="<?php echo $_SERVER['PHP_SELF']; ?>" method='POST'>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type='text' class='form-control' placeholder='Usuario' name='usuario' required />
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-at"></i></span>
                            </div>
                            <input type='text' class='form-control' placeholder='Email' name='email' required />
                        </div>
                        <div class="input-group form-group mt-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type='password' class='form-control' placeholder='Contraseña' name='pass' required />
                        </div>

                        <div class='row mt-3'>
                            <div class='col'>
                                <div class='form-group form-check text-nowrap'>

                                    <a href="index.php" class='btn btn-dark float-left'><i class="fas fa-arrow-circle-left mr-2"></i>Volver</a>
                                    <button type='submit' class='btn btn-primary float-right ml-3' name='registro'><i class="fas fa-sign-in-alt mr-2"></i>Registrarse</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        <?php } ?>
    </div>

</body>

</html>