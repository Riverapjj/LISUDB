<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Script-Type" content="text/javascript">
    <link rel="stylesheet" href="css/bisiesto.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/formstyle.css">
    <script src="js/validatedata.js"></script>
    <script src="js/prefixfree.min.js"></script>
    <title>Año bisiesto</title>
</head>

<body>
    <div class="wrapper">
        <?php
            if (!isset($_POST['enviar'])):
        ?>
    </div>
    <form action="<?=$_SERVER['PHP_SELF'];?>" method="POST" name="frmdatos">
        <h2 class="contact"></h2>
        <span class="contact">
            <label for="txtdato">Probar año</label>
        </span>
        <input type="text" name="year" id="year" value="" maxlength="20" placeholder="(Ingrese el dato)"><br />
        <span id="numbersOnly">Ingrese números enteros</span>
        <input type="submit" value="Probar" name="enviar" id="enviar">
    </form>
    <?php
        else:
            //Script que determina si un año es bisiesto o no
            $year = isset($_POST['year']) ? $_POST['year'] : 0;
            if (($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0):
                echo "<p class=\"bisiesto\"></p>";
                echo "<span style=\"color:Green;font:bold 10pt 'Lucia Sans';\">El año $year es bisiesto</span><br />";
                echo "<span style=\"color:Green;font:bold 10pt 'Lucia Sans';\"><a href=\"{$_SERVER['PHP_SELF']}\">Probar otro año</a>";
                echo "</p>";
                
            else:
                echo "<p class=\"bisiesto\"></p>";
                echo "<span style=\"color:FireBrick;font:bold 10pt 'Lucia Sans';\">El año $year no es bisiesto</span><br />";
                echo "<span style=\"color:Green;font:bold 10pt 'Lucia Sans';\"><a href=\"{$_SERVER['PHP_SELF']}\">Probar otro año</a>";
                echo "</p>";
            endif;
        endif;
    ?>
</body>

</html>