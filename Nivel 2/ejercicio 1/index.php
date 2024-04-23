<?php

$enteros = [1, 2, 3, 4];
$floats = [1.5, 2.5, 3.5, 4, 4.5];

$interseccion = array_intersect($enteros, $floats);
var_dump($interseccion);
echo "<br>";
$mezcla = array_merge($enteros, $floats);
var_dump($mezcla);
?>