<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Cabin+Condensed:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/conversion.css">
    <title>Conversión de cadenas</title>
</head>
<body>
    <?php

        define("SALTO", "\n");
        $cad = "10 metros";
        $str = "3D";
        $val = 20.5;
        $num = 7;

        echo "<header>\n";
        echo "\t<h1>Trabajando con los tipos de datos en PHP</h1>\n";
        echo "\t<p id=\"datos\">\n";
        echo "\t\tVariables:<br />\n";
        echo "\t\t\$cad = \"$cad\"<br />";
        echo "\t\t\$str = \"$str\"<br />";
        echo "\t\t\$val = $val <br />";
        echo "\t\t\$num = $num <br />";
        echo "\t</p>\n";
        echo "</header>\n";

        $concat = $cad + $val;
        echo '<section>';
        echo "\n";
        echo '<article>';
        echo '<p>El valor de $concat = $cad + $val es: <span> = "'.$cad.'" + '.$val.'</span> = <span>';
        echo $concat.'</span> y el tipo de dato es: <span>'.gettype($concat)."</span></p>".SALTO;
        echo '</article>';
        echo "\n";
        
        $concat = $str + $num;
        echo '<section>';
        echo "\n";
        echo '<article>';
        echo '<p>El valor de $concat = $str + $num es: <span> = "'.$str.'" + '.$num.'</span> = <span>';
        echo $concat.'</span> y el tipo de dato es: <span>'.gettype($concat)."</span></p>".SALTO;
        echo '</article>';
        echo "\n";

        $concat = $cad + $num;
        echo '<section>';
        echo "\n";
        echo '<article>';
        echo '<p>El valor de $concat = $cad + $num es: <span> = "'.$cad.'" + '.$num.'</span> = <span>';
        echo $concat.'</span> y el tipo de dato es: <span>'.gettype($concat)."</span></p>".SALTO;
        echo '</article>';
        echo "\n";

        $concat = $str + $val;
        echo '<section>';
        echo "\n";
        echo '<article>';
        echo '<p>El valor de $concat = $str + $val es: <span> = "'.$str.'" + '.$val.'</span> = <span>';
        echo $concat.'</span> y el tipo de dato es: <span>'.gettype($concat)."</span></p>".SALTO;
        echo '</article>';
        echo "\n";

        $concat = $cad + $str;
        echo '<section>';
        echo "\n";
        echo '<article>';
        echo '<p>El valor de $concat = $cad + $str es: <span> = "'.$cad.'" + '.$str.'</span> = <span>';
        echo $concat.'</span> y el tipo de dato es: <span>'.gettype($concat)."</span></p>".SALTO;
        echo '</article>';
        echo "\n";

        $concat = $val + $cad;
        echo '<section>';
        echo "\n";
        echo '<article>';
        echo '<p>El valor de $concat = $val + $cad es: <span> = "'.$val.'" + '.$cad.'</span> = <span>';
        echo $concat.'</span> y el tipo de dato es: <span>'.gettype($concat)."</span></p>".SALTO;
        echo '</article>';
        echo "\n";

        $concat = $num + $str;
        echo '<section>';
        echo "\n";
        echo '<article>';
        echo '<p>El valor de $concat = $num + $str es: <span> = "'.$num.'" + '.$str.'</span> = <span>';
        echo $concat.'</span> y el tipo de dato es: <span>'.gettype($concat)."</span></p>".SALTO;
        echo '</article>';
        echo "\n";

        $concat = $num + $cad;
        echo '<section>';
        echo "\n";
        echo '<article>';
        echo '<p>El valor de $concat = $num + $cad es: <span> = "'.$num.'" + '.$cad.'</span> = <span>';
        echo $concat.'</span> y el tipo de dato es: <span>'.gettype($concat)."</span></p>".SALTO;
        echo '</article>';
        echo "\n";

        $concat = $val + $str;
        echo '<section>';
        echo "\n";
        echo '<article>';
        echo '<p>El valor de $concat = $val + $str es: <span> = "'.$val.'" + '.$stre.'</span> = <span>';
        echo $concat.'</span> y el tipo de dato es: <span>'.gettype($concat)."</span></p>".SALTO;
        echo '</article>';
        echo "\n";
        
        $concat = $str + $cad;
        echo '<section>';
        echo "\n";
        echo '<article>';
        echo '<p>El valor de $concat = $str + $cad es: <span> = "'.$str.'" + '.$cad.'</span> = <span>';
        echo $concat.'</span> y el tipo de dato es: <span>'.gettype($concat)."</span></p>".SALTO;
        echo '</article>';
        echo "\n";
    ?>
</body>
</html>