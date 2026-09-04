<?php
        //Execício 1 
    $produto = "Chocolate";
    $quantidade=10;
    $precoUnitario=7.50;

        $result=$quantidade*$precoUnitario;
        
        echo " O valor total  dos chocolates é: ", $result, " Reais";

    
        // Exercício 2
        $corSinal = "Verde";

            if($corSinal == "Verde"){
                echo " pode passar ";
            }   
            elseif($corSinal == "Amarelo"){
                 echo " Atenção! ";
             } 
            else{
                 echo "Pare!";
             }  

?>