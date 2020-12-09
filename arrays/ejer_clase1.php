<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Actividad</title>
</head>
<body>
    <h3 class="text-center mt-3">Actividad PHP</h3>
    <div class="container mt-3">
        <?php
            //Crear un array asociativo que tenga la estructura siguiente:
            
            $articulos=[
                "articulo1"=>[
                    "nombre"=>"Bombilla",
                    "pvp"=>23.4,
                    "tipo"=>"Electricidad",
                    "stock"=>45
                ],
                "articulo2"=>[
                    "nombre"=>"Brasero",
                    "pvp"=>123.4,
                    "tipo"=>"Electricidad",
                    "stock"=>4
                ],
                "articulo3"=>[
                    "nombre"=>"Monitor led 19",
                    "pvp"=>203.4,
                    "tipo"=>"Informatica",
                    "stock"=>5
                ],
                "articulo4"=>[
                    "nombre"=>"tablet 10",
                    "pvp"=>123.4,
                    "tipo"=>"Informatica",
                    "stock"=>45
                ]
                ];
                
        
                $count=0;
                echo "<br><table align='center' border=2 cellpadding=5 cellspacing=5>\n";
                echo "<tr class='text-center' style='background-color:silver'>\n";
                echo "<td>&nbsp;</td>\n";
                echo "<td>Nombre</td>\n";
                echo "<td>PVP (€)</td>\n";
                echo "<td>Tipo</td>\n";
                echo "<td>Stock</td>\n";
                echo "</tr>\n";
                foreach($articulos as $k => $v) {
                    echo "<tr class='text-center'>\n";
                    echo "<td style='background-color:silver;'>$k</td>\n";
                    foreach($v as $k1 => $v1) {
                        echo "<td class='text-center'>$v1</td>\n";
                        if($k1 == "stock") $count += $v1;
                    }
                    echo "</tr>\n";
                }
                
                echo "</table>\n";
        
                echo "<br>El total de stock es de : $count<br><br>\n";

        ?>
    </div>
</body>
</html>