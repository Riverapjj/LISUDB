<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Factorial de un número</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-offset-2 py-4">
                
                <?php
                    if(isset($_POST['calcular'])) {

                        
                        $numero = is_numeric($_POST['numero']) ? $_POST['numero'] : "";

                        if ($numero == "" || $numero < 0) {
                            echo "<div class='alert alert-danger'>Debes ingresar un número positivo.</div>";
                        }
                        else {
                            $resultado = 1;
                            for ($i=1; $i <= $numero ; $i++) { 
                                $resultado = $resultado * $i;
                            }
                        }

                        
                    }
                ?>

                <div class="card">
                    <div class="card-header">
                        <h1>Factorial de un número</h1>
                    </div>
                    <div class="card-body">
                        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                            <label for="numero" class="form-label">Número:</label>
                            <input type="number" id="numero" name="numero" class="form-control">
                            <input type="submit" value="Calcular" name="calcular" class="btn btn-success">
                        </form>

                        <?php
                            if(isset($resultado)) {
                                echo "<h3>$numero!=$resultado</h3>";
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>