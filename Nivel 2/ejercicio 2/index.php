<?php

$notasAlumnos = [
    "Juan" => array(9, 4, 5, 6, 7),
    "Pedro" => array(4, 7, 6, 8, 9),
    "Paco" => array(7, 10, 9, 8, 1),
    "Miguel" => array(7, 4, 5, 8, 7),
    "Jorge" => array(3, 2, 4, 4, 5)
];




echo "Media de las notas de cada alumno: " . "<br>";
foreach ($notasAlumnos as $alumno => $notas) {
    $media = calcularMediaAlumnos($notas);
    echo "$alumno: $media" . "<br>";
}

$mediaClase = calcularMediaClase($notasAlumnos);
echo "Media de la clase entera: $mediaClase" . "<br>";






function calcularMediaAlumnos(array $notasAlumnos)
{
    $totalNotas = array_sum($notasAlumnos);
    $cantidadNotas = count($notasAlumnos);
    return $totalNotas / $cantidadNotas;
}


function calcularMediaClase(array $notasAlumnos)
{
    $total = 0;
    $cantidadAlumnos = count($notasAlumnos);

    foreach($notasAlumnos as $alumno => $notas){
        $total += array_sum($notas);
    }

    return $total / ($cantidadAlumnos * 5);

}
