<?php
    
    $nota1 = 4.5;
    $nota2 = 6;
    $nota3 = 9;
    $nota4 = 5;

    $bim1=$nota1+$nota2;
    $bim2=$nota3+$nota4;
    
    $semestre=($bim1+$bim2)/2;
        if ($semestre>=7){
            echo "Parabéns, você foi aprovado. Sua média final é de: ", $semestre;
        }
        elseif (($semestre<7)&&($semestre>=6)){
            echo "Você ficou de recuperação nesse semestre. Sua média final é de: ", $semestre;
        }
        else {
            echo "Você reprovou! Sua média final foi de: ", $semestre;
        }
?>