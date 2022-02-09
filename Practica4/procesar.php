<?php

require 'validaciones.php';

    if (isset($_POST)) {

        extract($_POST);
        $errores = array();

        if (!isset($nombres) || estaVacio($nombres)) {
            array_push($errores, "Debes ingresar el nombre");
            if (!esTexto($nombres)) {
                array_push($errores, "El nombre debe contener solo letras");
            }
        }

        if (!isset($apellidos) || estaVacio($apellidos)) {
            array_push($errores, "Debes ingresar los apellidos");
            if (!esTexto($nombres)) {
                array_push($errores, "El apellido debe contener solo letras");
            }
        }

        if (!isset($telefono) || estaVacio($telefono)) {
            array_push($errores, "Debes ingresar el telefono"); 
            if (!esMail($correo)) {
                array_push($errores, "Correo no válido");
            }
        }
       
        if (!isset($telefono) || estaVacio($telefono)) {
            array_push($errores, "Debes ingresar el telefono"); 
        }

        if (!isset($carnet) || estaVacio($carnet)) {
            array_push($errores, "Debes ingresar el carnet");
        }
        var_dump($errores);
    }

?>