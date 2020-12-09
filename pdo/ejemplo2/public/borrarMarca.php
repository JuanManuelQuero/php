<?php
session_start();

require "../vendor/autoload.php";
use Clases\Marcas;

if(!isset($_POST['marcaID'])) {
    header("Location:index.php");
    die();
}

$id = $_POST['marcaID'];
$estaMarca = new Marcas();
$estaMarca ->setId_marca($id);
$imagen = $estaMarca->devolverImagen();
$estaMarca->delete();

if(basename($imagen) != "default.jpg") {
    unlink($imagen);
}

$estaMarca = null;

$_SESSION['mensaje'] = "Marca borrada correctamente.";
header("Location:index.php");