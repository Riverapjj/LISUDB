<?php
    $indexMateria = $_POST['index'];
    $indexXML = 0;
    $materias = simplexml_load_file('materias.xml');

    foreach ($materias->materia as $materia) {
        if ($indexMateria == $indexXML) {
            $materia->codigo = $_POST['codigo'];
            $materia->nombre = $_POST['nombre'];
            $materia->uvs = $_POST['uvs'];
            $materia->nota = $_POST['nota'];
            echo 'se realizo';
            break;
        }
        $indexXML++;
    }

    file_put_contents('materias.xml', $materias->asXML());
    session_destroy();
    header('location:index.php?exito=1');

?>