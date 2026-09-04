<?php
    $produto = [ 
        [ "nome" => "Teclado", "estoque" => 15],
        [ "nome" => "Mouse", "estoque" => 3],
        [ "nome" => "Monitor", "estoque" => 0],
        [ "nome" => "Headset", "estoque" => 8],
        [ "nome" => "Placa de vídeo", "estoque" => 6]
    ];

    echo "Relatório de estoque:\n";
    foreach ($produto as $item) {
        if ($item['estoque'] == 0) {
            echo "AVISO: " . $item['nome'] . " está ESGOTADO!\n";
        } elseif ($item['estoque'] < 5) {
            echo "ALERTA:".$item['nome']." com estoque baixo (".$item['estoque'] . ").\n";
        } else {
            echo "OK" . $item['nome'] . " possui " . $item['estoque'] . " unidades.\n";
        }
    }
?>