<?php
    $codigo = $_GET['cod'];
    $materias = simplexml_load_file('materias.xml');
    $indice = 0;
    $i = 0;

    foreach ($materias->materia as $row) {
        if ($row->codigo == $codigo) {
            $indice = $i;
            break;
        }
        $i++;
    }

    unset($materias->materia[$indice]);
    file_put_contents('materias.xml', $materias->asXML());

    header('location:index.php')
?>