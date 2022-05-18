<?php 


$entero1 = 3;
$entero2 = 2;

calcularSuma($entero1,$entero2);


function calcularSuma($a,$b) {


if($a != $b) {

    $resultado = ($a + $b); 

} else {

    $resultado = (($a + $b) * 2);
}

echo $resultado;

}

?>