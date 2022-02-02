<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nobile&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/tables.css">
    <script src="js/modernizr.custom.lis.js"></script>
    <title>Información recibida</title>
</head>
<body>
    <section>
        <article>
            <div id="info">
                <table id="hor-zebra" summary="Datos recibidos del formulario">
                    <caption>Información de formulario</caption>
                    <thead>
                        <tr class="thead">
                            <th scope="col">Campo</th>
                            <th scope="col">Valor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if(isset($_POST['submit']) && $_POST['submit'] == "Enviar"):

                                echo "\t<tr class=\"odd\">\n";
                                echo "\t\t<td>\nCliente\n</td>\n";                                
                                extract($_POST);
                                $cliente = !empty($client) ? $client : "<a href=\"ingresodatos.html\">No ingresó el cliente.</a>";
                                echo "\t\t<td>\n".$cliente."\n</td>\n";
                                echo "\t</tr>\n";

                                echo "\t<tr>\n";
                                echo "\t\t<td>\nProducto\n</td>\n";
                                $producto = !empty($product) ? $product : "<a href=\"ingresodatos.html\">No ingresó el producto.</a>";
                                echo "\t\t<td>\n".$producto."\n</td>\n";
                                echo "\t</tr>\n";

                                echo "\t<tr class=\"odd\">\n";
                                echo "\t\t<td>Precio\n</td>\n";
                                $precio = !empty($price) ? $price : "<a href=\"ingresodatos.html\">No ingresó el precio.</a>";
                                echo "\t\t<td>\n".$precio."\n</td>\n";
                                echo "\t</tr>\n";

                                echo "\t<tr>\n";
                                echo "\t\t<td>Cantidad\n</td>\n";
                                $cantidad = !empty($quantity) ? $quantity : "<a href=\"ingresodatos.html\">No ingresó la cantidad.</a>";
                                echo "\t\t<td>\n".$cantidad."\n</td>\n";
                                echo "\t</tr>\n";
                                    echo "\t<tr class=\"odd\">\n";
                                    echo "\t\t<td>\nTotal a pagar\n</td>\n";
                                if(isset($cliente) && isset($producto) && floatval($precio) > 0 && floatval($cantidad) > 0):
                                    echo "\t<td>\n$".number_format($precio * $cantidad, 2, '.', ',')."\n</td>\n";
                                else:
                                    echo "\t<td>\nNada que cobrar\n</td>\n";
                                endif;
                                    echo "\t</tr>\n";
                            else:
                                echo "\t<tr class=\"odd\">\n";
                                echo "\t\t<td>No se han ingresado desde el formulario.</td>";
                                echo "\t</tr>\n";
                            endif;
                        ?>
                    </tbody>
                </table>
                <div id="link">
                    <a href="ingresodatos.html" class="button-link">Ingresar nuevos datos</a>
                </div>
            </div>
        </article>
    </section>
</body>
</html>