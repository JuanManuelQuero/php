<?php
$usuario = "admin";
$pass = "secreto";
$miUsuario = trim($_POST['usuario']);
$miPass = trim($_POST['pass']);

if($miUsuario == $usuario && $miPass == $pass) {
    //Validación correcta
    if(isset($_POST['recordar'])) {
        setcookie('usuario', $usuario, time() + 7*24*3600);
        setcookie('pass', $pass, time() + 7*24*3600);
    }
    echo "<p>Validacion Correcta</p>";
    echo "<a href='formulario1.php'><input type='button' value='Volver'></a>";
}else {
    //Me he equivocado
    header('Location: formulario1.php');
}