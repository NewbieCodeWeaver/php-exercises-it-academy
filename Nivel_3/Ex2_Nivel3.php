<?php 


$buscarCaracter = "z";


conocerNumeroCaracteres($buscarCaracter);


function conocerNumeroCaracteres($a) {

$arrayObjetos = array("casa","arbol","lapiz");

$cadenaString = $arrayObjetos[0] . $arrayObjetos[1] . $arrayObjetos[2]; // convertimos los elementos del array a String

$resultado = substr_count($cadenaString,$a); // buscamos cuantas veces se repite el caracter dentro de la cadena

echo $resultado;
}

?>