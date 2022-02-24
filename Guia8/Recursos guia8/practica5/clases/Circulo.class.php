<?php

    include_once('Figura.class.php');
    class Circulo implements IFigura {

        private $radio;
        private $nombre;

        function __construct($_r, $_nombre) {
            $this->radio = $_r;
            $this->nombre = $_nombre;
        }

        public function calcularArea() {
            return 3.1416 * pow($this->radio, 2);
        }

        public function calcularPerimetro() {
            return 3.1416 * $this->radio * 2;
        }

        public function __toString() {
            return "Soy $this->nombre, mi área es ".$this->calcularArea()." y mi perímetro es ".$this->calcularPerimetro();
        }
    }