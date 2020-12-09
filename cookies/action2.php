<?php
$usuario = "admin";
$pass = "secreto";
$miUsuario = trim($_POST['usuario']);
$miPass = trim($_POST['pass']);

if ($miUsuario == $usuario && $miPass == $pass) {
    //reseteo los errores
    setcookie('error', "", time() - 100);
    //Validación correcta
    if (isset($_POST['recordar'])) {
        setcookie('usuario', $usuario, time() + 7 * 24 * 3600);
        setcookie('pass', $pass, time() + 7 * 24 * 3600);
    }
    echo "<p>Validacion Correcta</p>";
    echo "<a href='formulario2.php'><input type='button' value='Volver'></a>";
} else {
    if(isset($_COOKIE['error'])) {
        $cont = (int)($_COOKIE['error']) + 1;
        if($cont == 3) {
            setcookie('error', $cont, time() + 30);
        }else {
            setcookie('error', $cont, time() + 24*3600);
        }
        
    }else {
        setcookie('error', "1", time() + 24*3600);
    }
    //Me he equivocado
    header('Location: formulario2.php');
}
