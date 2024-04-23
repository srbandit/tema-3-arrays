<?php

$array = ["hola", "php", "html"];
$letra = "h";



if(contienenCaracter($array, $letra)){
    echo "Todas las palabras contienen la letra " . $letra;
}else{
    echo "Ninguna palabra contiene la letra " . $letra;
}


function contienenCaracter(array $array, String $letra)
{
    foreach ($array as $palabra) {
        if (strpos($palabra, $letra) === false) {
            return false;
        } else {
            return true;
        }
    }
}


?>
