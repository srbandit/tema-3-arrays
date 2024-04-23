<?php

$array = ["ana", "pedro", "pepe", "miguel", "tom"];

$esPar = array_filter($array,"devolverPar");
echo "Las palabras par son: " . "<br>";
print_r($esPar);

function devolverPar($x)
{
   return strlen($x) %2 == 0; 
}
