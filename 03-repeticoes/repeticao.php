<?php
    echo "Selecione o ano de ingresso : ";
    for ($i = 2020; $i <= 2026; $i++)
    {
        echo "Ano: $i | ";
    }

    echo "Inicie um numero de casa: ";
    for ($casa = 2; $casa <= 30; $casa++)
    {
        echo "número da casa: $casa | ";

    }

    $contador = 1;
    while ($contador <= 5)

    {
        echo "processando registro acadêmico n $contador... <br>";
        $produto="Pães";
        $quantidade=10;
        $precoUnit=0.15;
        $total=$quantidade*$precoUnit;
        echo "Você comprou: ", $quantidade, $produto, " o preço unitário do produto foi  de: ",
        $precoUnit, " e o total da compra foi: ", $total;
        $contador++;      
    } 
        
        $tentativas = 0; 

    do
    {
        echo "tentanto conectar ao servidor de banco de dados... <br>" ;
        $tentativas++;
    }   
    
    while ($tentativas < 10); //Mesmo sendo falso, ele executou uma vez 
    $disciplinas = ["Programação web", "Estruturas de Dados ", "Banco de Dados"];
    foreach ($disciplinas as $indice => $nome) {
        echo "Cod: $indice - Disciplina: $nome <br>";
    }
            
?>