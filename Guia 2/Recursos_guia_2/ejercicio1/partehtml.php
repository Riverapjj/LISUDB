<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximun-scale=1.0,minimun-scale=1.0">
    <link rel="stylesheet" href="css/htmlphp.css">
    <script src="js/modernizr.custom.lis.js"></script>
    <script src="js/prefixfree.min.js"></script>
    <title>Scripts con (X)HTML y PHP</title>
</head>
<body>
    <div class="wrap">
        <header>
            <h1>Demostración de HTML y PHP</h1>
        </header>

        <section class="main">
            <article id="html">
                <div class="text">
                    <p>
                        &lt;!DOCTYPE html&gt;</br>
                        &lt;html&gt;</br>
                        ...
                    </p>
                </div>
                <p>Parte del HTML normal</p>
                <div class="img">
                    <img src="img/html5.png" alt="Logo de HTML5">
                </div>
            </article>
            <?php
                echo "<article id=\"php\">\n";
                echo "<div class=\"text\">";
                echo "<p>&lt;?php<br />";
                echo "...<br />";
                echo "Parte con PHP";
                echo "<p>?&gt;</p>";
                echo "</div>";
                echo "<div class=\"img\">";
                echo "<img src=\"img/php.png\" alt=\"Logo de HTML\"/>";
                echo "</div>";
                echo "\n</article>\n";
            ?>
        </section>
    </div>
</body>
</html>