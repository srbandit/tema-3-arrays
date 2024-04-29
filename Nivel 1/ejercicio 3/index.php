<?php

$array = ["hola", "php", "html"];
$letra = "h";
$resultado = contieneLetra($array, $letra);
if ($resultado == true) {
    echo "true";
}else{
    echo "false";
}


function contieneLetra($array, $letra){
    $total = count($array);
    $coincidencias = 0;
    for ($i=0; $i < $total; $i++) { 
        if(str_contains($array[$i], $letra)){
            $coincidencias++;
        }
    }
    return $total == $coincidencias;
}

?>
