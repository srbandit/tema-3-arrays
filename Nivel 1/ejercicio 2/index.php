<?php

$x = [10, 20, 30, 40, 50, 60];
echo "tamaño total del array: " . sizeof($x) . "<br>";
unset($x[3]);
$reset = array_values($x);
var_dump($reset) . "<br>";

?>