<?php

    abstract class Model {
        
        private $db_host = "localhost";
        private $db_user = "root";
        private $db_pass = "";
        private $db_name = "inventario_libros";
        private $conn;

        public function __construct() {}

        abstract function get();
        abstract function create();
        abstract function update();
        abstract function delete();

        private function db_open() {
            $this->conn = new mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_name); 
        }

        private function db_close() {
            $this->conn->close();
        }

        //Método para ejecutar consultas de actualización
        protected function set_query($query) {
            try {
                $this->db_open();
                $rowsAffected = $this->conn->query($query);
                $this->db_close();
                return $rowsAffected;
            } catch (exception $e) {
                return 0;
            }
        }

        //Método para ejecutar consultas de selección
        protected function get_query($query) {
            $rows = [];
            $this->db_open();
            $result = $this->conn->query($query);

            while($rows[] = $result->fetch_assoc());
            $result->close();

            $this->db_close();
            return $rows;
        }
    }