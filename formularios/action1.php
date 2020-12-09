<?php
echo "Array \$_REQUEST<br>";
var_dump($_REQUEST);
echo "<br>Array \$_POST<br>";
var_dump($_POST);
$correo=$_POST['email'];
echo "<br>El correo es: " .$correo;

//no se cierra el php, si es solo codigo puro en php