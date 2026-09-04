<?php
// Esse arquivo será para demonstrar ps operadores do php 
$num1=46;
$num2=10;


echo "o primeiro número é", $num1;
echo "o Segundo número é", $num2;

$result=$num1+$num2;
echo "O resultado da soma de dois números é", $result;

$result2=$num1-$num2;
echo "O resultado da Subtração de dois números é", $result2;

$result3=$num1*$num2;
echo "O resultado da Multiplicação de dois números é", $result3;

$result4=$num1/$num2;
echo "O resultado da Divisão de dois números é", $result4;

$a=8;
$b=4;
$c=6;
$delta= ($b**$b)-4*$a*$c;
echo " O resultado de delta é", $delta;

$n=2;
$exp=10;
$pot=$n**$exp;
echo " O valor da potenciação é = ", $pot;

$real=100;
$dolar=5.25;
$yen=29.87;
$dolarconvert= $real/$dolar;
$yenconvert= $real*$yen;
echo " 100 reais convertidos em dolar é = ", $dolarconvert;
echo " 100 reais convertidos para iene é = ", $yenconvert;

?>