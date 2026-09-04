<?php

function verificarVoto($idade) {
    if ($idade > 69) {
        $voto = "Facultativo";
        echo "Seu voto é: " . $voto;
    } elseif ($idade >= 18) {
        $voto = "Obrigatório";
        echo "Seu voto é: " . $voto . " .Sujeito a multa, caso não vote!";
    } elseif ($idade >= 16) {
        $voto = "Facultativo";
        echo "Seu voto é: " . $voto;
    } else {
        $voto = "Proibido";
        echo "Seu voto é: " . $voto;
    }
}

// Chamando a função
verificarVoto(18);
