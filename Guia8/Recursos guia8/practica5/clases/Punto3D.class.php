<?php

    class Punto3D extends Punto {

        private $z;

        function __construct($_x, $_y, $_z) {
            parent::__construct($_x, $_y);
            $this->z = $_z;
        }

        function __toString() {
            return "($this->x, $this->y, $this->z)";
        }
    
        public function calcularDistanciaOrigen() {
            return sqrt(pow($this->x, 2) + pow($this->y, 2) + pow($this->z, 2));
        }
    }

?>