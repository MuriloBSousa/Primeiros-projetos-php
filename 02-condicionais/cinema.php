<?php
$nome= "Murilo Borges Sousa";
$anoNascimento=2008;
$idade=2026-$anoNascimento;
$classificacao=18;
$tituloDofilme="Demon Slayer - Castelo Infinito";
$benemeia= "aluno"; "profesor";
$valorIngresso=30;
$horasessao="19:30 horas";
$poltrona="A12";

if ($idade>= 60){

    echo "olá! ", $nome, " Você tem direito à gratuidade";
    echo  " Seu ingresso está disponível para a seguinte poltrona: ",$poltrona;
    echo " O filme: ", $tituloDofilme, " iniciará às: ", $horasessao;
}

elseif ($idade<$classificacao){

    echo "olá!" ,$nome, " Você não pode assitir:" ,$tituloDofilme, "! Pois a sua classificação indicatival é: " ,$classificacao, "anos";
}

elseif (($benemeia=="aluno") || ($benemeia=="professor")&&($idade<60)){

    $meia=$valorIngresso/2;
    echo "olá! ", $nome, " você tem 50% de desconto no seu ingresso! ";
    echo " O valor total do seu ingresso: ", $meia, " Reais ";
    echo  "Seu ingresso está disponível para a seguinte poltrona: ",$poltrona;
    echo " O filme: ", $tituloDofilme, " iniciará às: ", $horasessao;
}

else{

    echo "olá! ", $nome, " O valor do ingresso é: ", $valorIngresso;
    echo  " Seu ingresso está disponível para a seguinte poltrona: ",$poltrona;
    echo " O filme: ", $tituloDofilme, " iniciará às: ", $horasessao;
}
?>