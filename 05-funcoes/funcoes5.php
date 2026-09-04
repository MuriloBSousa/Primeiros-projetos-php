<?php
//Função paara verificar aprovação baseada na nota

function verificiarAprovacao(float $notas): string {
    if ($nota <= 7.0) {
        return "Aluno Aprovado";
    } else {
        return "Aluno em Recuperação";
    }
}

$notaDoAluno = 8.5;
$status = verificiarAprovacao($notaDoAluno);
echo "Nota: $notaDoAluno | Status: $status";
?>