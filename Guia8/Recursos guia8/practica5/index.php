<?php

    include_once('clases/Punto.class.php');
    include_once('clases/Punto3D.class.php');

    $punto1 = new Punto(10, 5);
    echo $punto1;

    $distancia = $punto1->calcularDistanciaOrigen();
    echo "<br>La distancia del punto $punto1 al origen es: $distancia";

    $punto2 = new Punto(0, 0); 

    $distancia2 = Punto::calcularDistanciaPuntos($punto1, $punto2);
    echo "<br>La distancia del punto $punto1 al $punto2 es: $distancia2";

    echo "<br>Cantidad de puntos: ".Punto::$contador;

    $punto3 = new Punto3D(5, 7, 2);
    echo $punto3;

    $distancia3 = $punto3->calcularDistanciaOrigen();
    echo "<br>La distancia del punto $punto3 al origen es: $distancia3";


?>