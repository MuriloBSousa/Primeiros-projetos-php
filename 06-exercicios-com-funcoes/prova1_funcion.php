<?php

function calcularSemestre($nota1, $nota2, $nota3, $nota4) {
    $bim1 = $nota1 + $nota2;
    $bim2 = $nota3 + $nota4;
    return ($bim1 + $bim2) / 2;
}

function verificarSituacao($semestre) {
    if ($semestre >= 7) {
        echo "Parabéns, você foi aprovado. Sua média final é de: " . $semestre;
    } elseif ($semestre >= 6) {
        echo "Você ficou de recuperação nesse semestre. Sua média final é de: " . $semestre;
    } else {
        echo "Você reprovou! Sua média final foi de: " . $semestre;
    }
}

// Chamando as funções
$semestre = calcularSemestre(4.5, 6, 9, 5);
verificarSituacao($semestre);
