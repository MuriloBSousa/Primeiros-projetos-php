<?php
//1. criação do array com 5 notas
$notas = [8.5, 7.0, 9.2, 6.5, 8.8, 9.5, 10 ];

//2. Inicialização da variável que guardará a soma 
$soma = 0;

//3. Uso do foreach para percorrer o array somar as notas
foreach ($notas as $endmemory){
    $soma += $endmemory; // O mesmoque $soma = $soma + $nota
}
                                      
// 4. Cálculo da média da média aritmética
// O count ($notas) retorna a quantidade de elementos do array
// (neste caso. 5)
$quantidadeDeNotas = count ($notas);
$media = $soma / $quantidadeDeNotas;

// 5. Exibição dos resultados
echo "notas do aluno: " . implode(",", $notas) . "<br>";
echo "soma total: " . $soma . "<br>";
echo "média aritmética: " . $media;
?>