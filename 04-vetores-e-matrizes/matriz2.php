
<?php
// 1. Definindo o tamanho da matriz
$totalLinhas = 10;
$totalColunas = 5;
$matriz = [];

// 2. Loop externo para criar as LINHAS 
for ($linha = 0; $linha < $totalLinhas; $linha++) {

    // 3. Loop interno para criar as COLUNAS de cada LINHA
    for ($coluna = 0; $coluna < $totalColunas; $coluna++) {
        // Atribuindo conteúdo dinâmico para cada célula
        $matriz[$linha][$coluna] = "L:$linha C:$coluna";
    }
}

// 4. Exibindo a matriz
echo "<h3>Conteúdo da Matriz:</h3>";
echo "<table border='1' style='border-collapse: collapse; text-align: center;'>";

for ($linha = 0; $linha < $totalLinhas; $linha++) {
    echo "<tr>";
    for ($coluna = 0; $coluna < $totalColunas; $coluna++) {
        echo "<td style='padding: 5px;'>" . $matriz[$linha][$coluna] . "</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>