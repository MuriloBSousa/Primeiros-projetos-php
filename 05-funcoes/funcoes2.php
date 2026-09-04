<?php
//A função espera receber um nome
function CadastrarAluno($nome,$rg,$cpf) {
    echo "Ola, ", $nome ,"O meu rg é: ",$rg,"Esse é o meu cpf: ", $cpf,
    "! Prepare-se para codar.<br>";
}
//Chamadas com diferentes argumentos
CadastrarAluno("Murilo Borges Sousa", 1234567, "045.064.896-91" );
CadastrarAluno("Júlia Vaz Bom Tempo", 9876543, "035.074.086-91" );

?>