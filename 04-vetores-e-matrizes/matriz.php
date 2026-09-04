<?php
//Criabndo uma matriz de notas (Aluno -> Notas)
    $notas = [

        ["João", 8, 7], // Linha 0
        ["Maria", 9, 10], // Linha 1
        ["José", 6, 5] // Linha 2
    ];

    // Acessando a nota 10 da Maria: 
    // Ela está na linha 1, coluna 2 (índices: Aluno=0, Nota=1, Nota=2)
    echo "O aluno(a)", $notas [0][0], " | Teve como primeira nota: ", $notas[0][0]
    echo "<br>--- Lista De Alunos ---<br>";
    // Percorrendo a matriz com dois loops (um dentro do outro)
    foreach ($notas as $linha) {
        echo "Aluno: ", $linha [0] . " | Nota 1: " . $linha [1] . 
            "| Nota 2: " . $linha[2] . "<br>";

    }

?>
