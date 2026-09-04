<?php

function verificarAcesso($user, $senha) {
    if ($user == "Murilo" && $senha == "1234") {
        echo "Acesso permitido!";
    } else {
        echo "Acesso negado!";
    }
}

// Chamando a função
verificarAcesso("Murilo", "1234");
