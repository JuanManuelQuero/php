<!DOCTYPE html>
<?php
session_start();
require "../vendor/autoload.php";

use Clases\Libros;

$misLibros = new Libros();
$misLibros->rellenarLibros(100);
$totalRegistros = $misLibros->totalReg();
$paginar = 5;
if($totalRegistros%$paginar == 0) {
    $cantidadPaginas = $totalRegistros/$paginar;
}else {
    $cantidadPaginas = (int)(($totalRegistros/$paginar)+1);
}
$estapagina = (isset($_GET['page'])) ? $_GET['page'] : 1;

$traer = $misLibros->recuperarTodos(($estapagina-1)*$paginar, $paginar);
$misLibros = null;
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libros</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
</head>

<body style="background-color: darkSalmon">
    <h3 class="text-center my-3">Libros</h3>
    <div class="container">

        <?php
        if (isset($_SESSION['mensaje'])) {
            echo "<p class='text-light bg-dark font-weight-bold p-2 my-2'>{$_SESSION['mensaje']}</p>";
            unset($_SESSION['mensaje']);
        }
        ?>
        <a href="createLibro.php" class="btn btn-success my-2"><i class="fas fa-user-plus mr-2"></i>Crear Libro</a>
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">Titulo</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Portada</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while($fila = $traer->fetch(PDO::FETCH_OBJ)) {
                echo <<<TEXTO
                <tr>
                    <th scope="row">{$fila->titulo}</th>
                    <td>{$fila->apellidos}, {$fila->nombre}</td>
                    <td><img src="{$fila->portada}" width="80rem height="80rem"</td>
                    <td>
                    <form name="n1" action="borrarLibro.php" method="POST" class="form-inline">
                    <a href="updateLibro.php?id={$fila->id_libro}" class="btn btn-warning mr-2"><i class="far fa-edit mr-2"></i>Editar</a>
                    <a href="detalleLibro.php?id={$fila->id_libro}" class="btn btn-info mr-2"><i class="fas fa-info mr-2"></i>Detalles</a>
                    <input type="hidden" value="{$fila->id_libro}" name="id"/>
                    <button type="submit" class="btn btn-danger" onclick="return confirm('¿Borrar libro?');"><i class="far fa-trash-alt mr-2"></i>Borrar</button>
                    </form>
                    </td>
                </tr>
                TEXTO;
                }
                ?>
            </tbody>
        </table>
        <?php
            for($i=1;$i<=$cantidadPaginas;$i++) {
                echo "| <a href='libros.php?page=$i'>$i</a> |";
            }
        ?>
    </div>
</body>

</html>