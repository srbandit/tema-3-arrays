<?php

$miArray = [1, 2, 3, 4, 5, 6];


$cuadrado = array_map("calcularCuadrado", $miArray);
print_r($cuadrado);


function calcularCuadrado($numero)
{
    return pow($numero, 3);
}


?>