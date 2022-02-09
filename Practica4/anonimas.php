<?php

$alumnos = [
    ['nombre' => 'Juan', 'edad' => 18, 'nota1' => 10, 'nota2' => 5],
    ['nombre' => 'Maria', 'edad' => 17, 'nota1' => 2, 'nota2' => 5],
    ['nombre' => 'Fatima', 'edad' => 15, 'nota1' => 5, 'nota2' => 5],
    ['nombre' => 'Luis', 'edad' => 25, 'nota1' => 7, 'nota2' => 5],
];

var_dump($alumnos);

$mayores = array_filter($alumnos, function($alumno) {
    return $alumno['edad'] >= 18;
});

var_dump($mayores);


$promedios = array_map(function($alumno) {
    return ['nombre'=>$alumno['nombre'], 'promedio'=>($alumno['nota1'] + $alumno['nota2'])/2];
}, $alumnos);

var_dump($promedios);
?>