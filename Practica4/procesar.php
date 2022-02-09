<?php

require 'validaciones.php';

    if (isset($_POST)) {

        extract($_POST);
        $errores = array();

        if (!isset($nombres) || estaVacio($nombres)) {
            array_push($errores, "Debes ingresar el nombre");
        }else if (!esTexto($nombres)) {
            array_push($errores, "El nombre solo debe contener letras");
        }

        if (!isset($apellidos) || estaVacio($apellidos)) {
            array_push($errores, "Debes ingresar los apellidos");
        }else if (!esTexto($apellidos)) {
            array_push($errores, "El apellido solo debe contener letras");
        }

        if (!isset($correo) || estaVacio($correo)) {
            array_push($errores, "Debes ingresar el correo"); 
        }else if (!esMail($correo)) {
            array_push($errores, "Correo no válido");
        }
       
        if (!isset($telefono) || estaVacio($telefono)) {
            array_push($errores, "Debes ingresar el telefono"); 
        }else if (!esTelefono($telefono)) {
            array_push($errores, "Teléfono no válido");
        }

        if (!isset($carnet) || estaVacio($carnet)) {
            array_push($errores, "Debes ingresar el carnet");
        }else if (!esTelefono($telefono)) {
            array_push($errores, "Carnet no válido");
        }

        var_dump($errores);
    }

?>