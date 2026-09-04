<?php
//Criando um vetor de frutas
$frutas = ["Goiaba", "Maçã", "Banana", "Morango", "Uva", "Laranja"];

//Acessando um item específico
echo "Eu gosto de ", $frutas[3], "<br>";

//Acessando um novo item 
$frutas [7] = "Pera";

//Percorrendo o vetor com o comando 'foreach' (o mais fácil para PHP)
foreach ($frutas as $indice) {
    echo "frutas", $indice , "<br>";
}

?>