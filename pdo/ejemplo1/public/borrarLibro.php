<?php
session_start();
if(!isset($_POST['id'])) {
    header("Location:libros.php");
    die();
}
require "../vendor/autoload.php";
use Clases\Libros;

$id=$_POST['id'];
$libro = new Libros();
$libro->setId_libro($id);
$portada = $libro->recuperarPortada();
//si portada no es deafault.jpg voy a borrar el archivo de imagen y luego la entrada en la bbdd
$libro->delete();
if(basename($portada) != "default.jpg") {
    unlink($portada);
}
$libro = null;
$_SESSION['mensaje'] = "Libro borrado correctamente.";
header("Location:libros.php");