<?php

$mensaje = "Hola mundo";  
$otroMensaje = "Aquest és el curs de PHP";

convertirMayusculas();
hayarLongitud();
invertirFrase();

echo $mensaje . " ". $otroMensaje; 


function convertirMayusculas() {

$mensaje = "Hola mundo";   

$resultado = strtoupper($mensaje);

echo $resultado;

}

function hayarLongitud() {

$mensaje = "Hola mundo";  

$resultado = strlen($mensaje);

echo $resultado;

}

function invertirFrase() {

$mensaje = "Hola mundo";

$resultado = strrev($mensaje);

echo $resultado;

}
