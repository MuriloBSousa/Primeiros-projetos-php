<?php

        // Escolher perfil 

    $dolar=5.49;
    $perfil1= "admin";
    $perfil2= "professor";
    $perfil3= "aluno";
    $login=$perfil2;

        if($login==$perfil3)
            echo " Você está logado como Adiminitrador ";

        if($login==$perfil2)
            echo " Você está logado como Professor ";

        if($login==$perfil1)
             echo " Você está logado como Aluno ";


    $saldo = 50.00;
    $valorCompra = 80.00;

        if($saldo >= $valorCompra){
            echo "Compra realizada com sucesso!";
         }

        else {
            echo "Saldo insuficiente. Que tal guardar mais um pouco?";
        }


        // horários 


    $hora = 14;

        if(($hora>=6)&&($hora<=18))
        {
           echo "Bom dia!";
        }

        elseif (($hora>12)&&($hora<=18))
        {
            echo "Boa tarde!";
        }
        elseif (($hora>19)&&($hora<=24))
        {
            echo "Boa noite!";
        }
        else 
        {
        echo "Boa madrugada!";
        }


    // Esoclher a cor 
        $corFavorita == "verde";

        if($corFavorita == "verde")
        {
            echo "Você gosta da cor da natureza!";
        }

        elseif($corFavorita == "Azul")
        {
            echo "Você gosta da cor do céu!";
        }

        else
        {
             echo "Você escolheu uma cor diferente!";
        } 





?>