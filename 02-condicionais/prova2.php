<?php
    $idade = 18;
        if ($idade>69){
               $voto = " Facultativo ";
        echo "Seu voto é: ", $voto;
        }

        elseif (($idade>=18)&&($idade<=69)){
            $voto = " Obrigatório ";
        echo "Seu voto é: ", $voto, " .Sujeito a multa, caso não vote! ";
        }
        elseif (($idade>=16)&&($idade<=17)){
            $voto = " Facultativo ";
        echo "Seu voto é: ", $voto;
        }
        else {
            $voto = "Proibido";
        echo "Seu voto é: ", $voto;
        }
?>