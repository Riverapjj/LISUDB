<?php

    include_once('Figura.class.php');
    class Rectangulo implements IFigura {

        private $base;
        private $altura;
        private $nombre; 

        function __construct($_base, $_altura, $_nombre) {
            $this->base = $_base;
            $this->altura = $_altura;
            $this->nombre = $_nombre;
        }

        public function calcularArea() {
            return $this->base * $this->altura;
        }

        public function calcularPerimetro() {
            return ($this->base * 2) + ($this->altura * 2);
        }

        public function __toString() {
            return "Soy $this->nombre, mi área es ".$this->calcularArea()." y mi perímetro es ".$this->calcularPerimetro();
        }
    }