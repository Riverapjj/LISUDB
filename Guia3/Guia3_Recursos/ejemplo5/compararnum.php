<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@200&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="css/formstyle.css">
    <script src="js/prefixfree.min.js"></script>
    <title>Contador de palabras</title>
</head>
<body>
    <header>
        <h1>
            Resultados de la comparación de <?php echo $num1 = isset($_POST['numero1']) ? $_POST['numero1'] : 0?>, 
            <?php echo $num2 = isset($_POST['numero2']) ? $_POST['numero2'] : 0?> y 
            <?php echo $num3 = isset($_POST['numero3']) ? $_POST['numero3'] : 0?>
        </h1>
    </header>
    <section>
        <article>
            <p class="msg">
                <?php
                    $elmayor = ($num1 > $num2) ? $num1 : $num2;
                    $elmayor = ($elmayor > $num3) ? $elmayor : $num3;
                    printf("El número mayor es: %d", $elmayor);
                ?>
            </p>
        </article>
    </section>
</body>
</html>