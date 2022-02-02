<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <?php

        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];
        $motivo = $_POST['motivo'];
        $comentario = $_POST['comentario'];

        echo '
        <div class="container">
        <div class="row py-5">
        <div class="col-md-8 offset-md-2">
        <h1>Datos recibidos</h1>
            <table class="table table-striped">
                <tr>
                    <th>Nombre</th>
                    <td>'.$nombre.'</td>
                </tr>
                <tr>
                    <th>Apellidos</th>
                    <td>'.$apellido.'</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>'.$email.'</td>
                </tr>
                <tr>
                    <th>Motivo</th>
                    <td>'.$motivo.'</td>
                </tr>
                <tr>
                    <th>Comentario</th>
                    <td>'.$comentario.'</td>
                </tr>
            </table>
        </div>
        </div>
        </div>
        
        ';
    ?>
</body>

</html>