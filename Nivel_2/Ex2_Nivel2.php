<?php 

$palabra = "arbolito";

$primerCaracter = "l";
$ultimoCaracter = "s";

cambiarCaracteres($palabra,$primerCaracter,$ultimoCaracter);


function cambiarCaracteres($a,$b,$c) {

$palabraAcortada = substr($a,1,-1); // sustraemos el primer y último caracter

$nuevaPalabra = $b . $palabraAcortada . $c; // concateramos la palabra con los nuevos caracteres

echo $nuevaPalabra;

}

?>