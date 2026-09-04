<?php
    $listas=[
        ["Nome", "Profissão", "Idade", "Remuneração"], 
        ["Fulano", "Engenheiro", 30, 15000],
        ["Ciclano", "Professor", 48, 6500],
        ["Beltrano", "Piloto de Avião", 36, 17000],
        ["Geraldo", "Pedreiro", 40, 25000],
        ["David", "Advogado", 43, 32000]
    ];

        echo "A primeira pessoa se chama ", $listas[1][0], "sua profissão é: ", $listas[1][1],
            "Sua idade é: ", $listas[1][2], "sua remuneração é: ", [1][2] , "<br>";
            echo "<br>--- Listas de Alunos ---<br>";
    foreach ($listas as $linha) {
            echo $linha [0] . "|" . $linha[1] . 
             "|" . $linha[2] .  "|" . $linha[3] "<br>";
        }
?>