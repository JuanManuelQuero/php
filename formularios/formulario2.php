<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Formulario 2</title>
</head>
<body style="background-color: lightgrey">
    <h3 class="text-center mt-3">Formulario PHP</h3>
    <div class="container mt-3">
        <form name="form2" action="action2.php" method="POST">
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Nombre" name="nombre" required>
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Apellidos" name="apellidos">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="radio" class="form-check-input" name="edad" value="-1">
                    Menor de edad
                </div>
                <div class="col">
                    <input type="radio" class="form-check-input" name="edad" value="1">
                    Mayor de edad
                </div>
            </div>
            <div class="row">
                <div class="col-2">
                    <input type="checkbox" class="form-check-input" name="idiomas[]" value="Ingles">
                    Ingles
                </div>
                <div class="col-2">
                    <input type="checkbox" class="form-check-input" name="idiomas[]" value="Frances">
                    Francés
                </div>
                <div class="col-2">
                    <input type="checkbox" class="form-check-input" name="idiomas[]" value="Aleman">
                    Alemán
                </div>
            </div>
            <div class="row">
                <div class="col mt-3">
                    <input type="submit" value="Enviar" class="btn btn-primary mr-4">
                    <input type="reset" value="Limpiar" class="btn btn-warning">
                </div>
            </div>
            
        </form>
    </div>
</body>
</html>