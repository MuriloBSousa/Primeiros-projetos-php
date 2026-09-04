<?php

function exibirFichaAnimal($nomeDono, $nomeAnimal, $cadastroAnimal, $anoNascAnimal, $racaAnimal, $idade, $endereco, $porteAnimal, $cidade, $corAnimal) {
    echo "O dono do " . $racaAnimal . " se chama: " . $nomeDono . "\n";
    echo "O nome do animal é: " . $nomeAnimal . "\n";
    echo "Seu cadastro é: " . $cadastroAnimal . "\n";
    echo "Sua idade é: " . $idade . "\n";
    echo "Ano de Nasc: " . $anoNascAnimal . "\n";
    echo "Seu porte é: " . $porteAnimal . "\n";
    echo "Onde mora: " . $endereco . "\n";
    echo "Sua cor é: " . $corAnimal . "\n";
    echo "Cidade: " . $cidade . "\n";
}

// Chamando a função
exibirFichaAnimal(
    nomeDono: "Murilo",
    nomeAnimal: "Bob",
    cadastroAnimal: "123456789",
    anoNascAnimal: 2024,
    racaAnimal: "JackRussel",
    idade: 5,
    endereco: "qnn22",
    porteAnimal: "pequeno",
    cidade: "Ceilândia",
    corAnimal: "Branco com Marrom"
);
