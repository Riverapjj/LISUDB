<?php

    function estaVacio($var) {
        return empty(trim($var));
    }

    function esTexto($var) {
        return preg_match('/^[a-zA-Z ]+$/', $var);
    }

    function esMail($var) {
        return filter_var($var, FILTER_VALIDATE_EMAIL);
    }
?>