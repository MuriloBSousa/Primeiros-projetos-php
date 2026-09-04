<?php
//especificamos que os dados devem ser números inteiros (int)

function somaValores(int $numero1, int $numero2): int {
    return $numero1 + $numero2;
    
}
echo "Resultado da soma: ", somaValores(10,20);


?>