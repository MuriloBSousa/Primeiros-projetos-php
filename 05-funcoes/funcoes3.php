<?php
//A função calcula e devole o resultado (Return)

function calcularAreaQuadrado($lado) {
    $area = $lado * $lado;
    return $area;
    
}

$resultado = calcularAreaQuadrado(5);

echo "A área do quadrado é: " , $resultado;



?>