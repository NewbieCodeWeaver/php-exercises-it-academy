<?php


$array = array(10,20,30,40,50);

unset($array[3]);

$arrayNormalizado = array_values($array);

print_r($arrayNormalizado);


?>