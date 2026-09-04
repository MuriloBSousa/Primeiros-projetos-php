<?php
// criamos um array multidimensional com detalhes das peças
$estoque_informatica=
[
["id" => 101, "nome"=> "processador Ryzen 7","qtd" => 15, "preco" => 1850.00, "tipo" => "hardware"],
["id" => 102, "nome"=> "placa mãe B550M","qtd" => 8, "preco" => 950.00, "tipo" => "hardware"],
["id" => 103, "nome"=> "memoria RAM 16GB DDR4","qtd" => 25, "preco" => 320, "tipo" => "hardware"],
["id" => 104, "nome"=> "RTX 4060 Ti","qtd" => 5, "preco" => 2600.00, "tipo" => "hardware"],
["id" => 105, "nome"=> "SSD NVMe 1TB","qtd" => 30, "preco" => 450.00, "tipo" => "armazenamento"],
["id" => 106, "nome"=> "fonte 750N","qtd" => 12 , "preco" => 580.00, "tipo" => "energia"],
["id" => 107, "nome"=> "gabinete mid tower","qtd" => 10, "preco" => 350.00, "tipo" => "gabinete"],
["id" => 108, "nome"=> "water cooler 240mm","qtd" => 7, "preco" => 420.00, "tipo" => "refrigeração"],
["id" => 109, "nome"=> "monitor  27' 144Hz","qtd" => 4, "preco" => 1250.00, "tipo" => "periferico"],
["id" => 110, "nome"=> "teclado mecanico RGB","qtd" => 20, "preco" => 280.00, "tipo" => "periferico"],
];
echo "<h2>Relatorio de estoque de peças</h2>";

// Inicio da tabela para organizar os dados visualmente
echo "<table border='1' cellpadding='10' style='border-collapse: collapse; width: 100%'>";
 echo "<tr style='background-color: #b94dbf;'>
<th>id</th>
<th>produto</th>
<th>tipo</th>
<th>qtd</th>
<th>preço unit</th>
<th>total em estoque</th>
</tr>";
// o foreach percorre cada 'sub-array' (cada produto)
foreach ($estoque_informatica as $indice){
$valor_total_item = $indice ['id']* $indice['preco'];
echo "<tr>";
echo "<td>", $indice['id'], "</td>";
echo "<td>", $indice['nome'], "</td>";
echo "<td>", $indice['tipo'], "</td>";
echo "<td>", $indice['qtd'], "</td>";
echo "<td>R$",number_format($indice['preco'], 2,",","."). "</td>";
echo "<td>R$",number_format($valor_total_item, 2,",","."). "</td>";
echo "</tr>";
}
echo "</table>";
?>
