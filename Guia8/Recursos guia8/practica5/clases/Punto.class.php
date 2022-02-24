<?php

class Punto {

    //Atributos de la clase
    protected $x;
    protected $y;
    public static $contador;

    function __construct($_x, $_y) {
        $this->x = $_x;
        $this->y = $_y;
        self::$contador++;
    }

    function __toString() {
        return "($this->x, $this->y)";
    }

    public function calcularDistanciaOrigen() {
        return sqrt(pow($this->x, 2) + pow($this->y, 2));
    }

    public static function calcularDistanciaPuntos(Punto $p1, Punto $p2) {
        return sqrt(pow($p1->x - $p2->y, 2) + pow($p1->y - $p2->y, 2)); 
    }

    public function getX() {
        return $this->x;
    }

    public function setX($_x) {
        return $this->x = $_x;
    }


}

?>