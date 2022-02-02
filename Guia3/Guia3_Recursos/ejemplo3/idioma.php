<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/idioma.css">
    <title>Detector de lenguaje del navegador</title>
</head>
<body>
    <div id="wapper">
        <header>
            <h1 class="emboss">Idioma del navegador</h1>
        </header>
        <section>
            <?php
                //Antes de nada introducimos mensajes en forma de variables
                $espanol = "Hola";
                $ingles = "Hello";
                $aleman = "Hallo";
                $frances = "Bonjour";
                $italiano = "Ciao";
                $portugues = "Olá";
                //Ahora del navegador leemos cual es su lengua oficial
                $completo = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
                $idioma = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2);
                
                //Formulamos las posibilidades que se pueden dar
                echo "<p> $completo <br>";
                echo "$idioma </p>\n";

                if ($idioma == "es") {
                    echo '<p class="magOff">';
                    printf ("El lenguaje que se está utilizando en el navegador es el Español: %s </p>\n", $espanol);
                }elseif ($idioma == "fr") {
                    echo '<p class="magOff">';
                    printf ("El lenguaje que se está utilizando en el navegador es el Francés: %s </p>\n", $frances);
                }elseif ($idioma == "en") {
                    echo '<p class="magOff">';
                    printf ("El lenguaje que se está utilizando en el navegador es el Inglés: %s </p>\n", $ingles);
                }elseif ($idioma == "de") {
                    echo '<p class="magOff">';
                    printf ("El lenguaje que se está utilizando en el navegador es el Alemán: %s </p>\n", $aleman);
                }elseif ($idioma == "it") {
                    echo '<p class="magOff">';
                    printf ("El lenguaje que se está utilizando en el navegador es el Italiano: %s </p>\n", $italiano);
                }elseif ($idioma == "pt") {
                    echo '<p class="magOff">';
                    printf ("El lenguaje que se está utilizando en el navegador es el Portugués: %s </p>\n", $portugues);
                }else {
                    echo '<p class="magOff">';
                    echo "El idioma del navegador es desconocido.</p>\n";
                }
            ?>
        </section>
    </div>
</body>
<script src="js/modernizr.custom.lis.js"></script>
<script src="js/switchclass.js"></script>
</html>