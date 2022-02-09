<?php

function calcularDistancia(&$x1, $y1, $x2 = 0, $y2 = 0) {

    $x1 = 10;
    return sqrt(pow($x2 - $x1, 2) + pow($y2 - $y1, 2));
}

function calcularCuadratica($a, $b, $c) {

    $x1 = (-$b - sqrt(pow($b, 2) - (4 * $a * $c))) / (2 * $a);
    $x2 = (-$b + sqrt(pow($b, 2) - (4 * $a * $c))) / (2 * $a);

    return [$x1, $x2];
}

$factorial = function($n) {
    $resultado = 1;

    for($i = 1;$i <= $n;$i++) {
        $resultado *= $i;
    }
    return $resultado;
};

$_x1 = 5;

$raiz1 = calcularCuadratica(1,0,-9)[0];
$raiz2 = calcularCuadratica(1,0,-9)[1];



$distancia = calcularDistancia($_x1,5,2,0);
echo "La distancia entre los puntos (5, 5) y (2, 1) es ".round($distancia,2);

$distancia = calcularDistancia($_x1,5);
echo "<br>La distancia entre los puntos (5, 5) y (0, 0) es ".round($distancia,2);


echo "<br>El valor de $_x1 es  ".$_x1;
echo "<br>x1 = ".$raiz1. "; x2 = ".$raiz2;
echo "<br>El factorial de 6 es ".$factorial(6);

?>