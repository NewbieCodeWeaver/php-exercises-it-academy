<?php 

$numerosImpares = array(1,3,5,7,9);
$numerosPares = array(2,4,6);
$sumaArrays = 0;


array_push($numerosPares,8); // Afegeix un valor més a l'array que conté 3 integers.

$sumaArrays = Array_merge($numerosImpares,$numerosPares); // Mescla els dos arrays i imprimeix el tamany de l'array resultant per pantalla.

print_r($sumaArrays); // Ara imprimeix per pantalla l'array resultant valor a valor.

?>