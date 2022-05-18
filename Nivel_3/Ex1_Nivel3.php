<?php

$frase = "Hello world";


stringAarray($frase);


function stringAarray($a) {

$fraseSinEspacios = str_replace(' ', '',$a); // eliminamos los espacios en blanco del String

$ArrayFrase = str_split($fraseSinEspacios); // añadimos cada uno de sus caracteres al array


print_r ($ArrayFrase);

}


?>