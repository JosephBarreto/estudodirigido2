<?php
print"digite o primeiro numero:\n";
$num1 = (int) fgets(STDIN);
print"digite o segundo numero:\n";
$num2 = (int) fgets(STDIN);
print"digite o terceiro numero:\n";
$num3 = (int) fgets(STDIN);
print"digite o quarto numero:\n";
$num4 = (int) fgets(STDIN);
print"digite o quinto numero:\n";
$num5 = (int) fgets(STDIN);
if($num1 >= $num2 and $num1 >= $num3 and $num1 >= $num4 and $num1 >= $num5){
    print"o maior numero é $num1";
}
elseif($num2 >= $num1 and $num2 >= $num3 and $num2 >= $num4 and $num2 >= $num5){
    print"o maior numero é $num2";
}
elseif($num3 >= $num1 and $num3 >= $num2 and $num3 >= $num4 and $num3 >= $num5){
    print"o maior numero é $num3";
}
elseif($num4 >= $num1 and $num4 >= $num2 and $num4 >= $num3 and $num4 >= $num5){
    print"o maior numero é $num4";
}
elseif($num5 >= $num1 and $num5 >= $num2 and $num5 >= $num3 and $num5 >= $num4){
    print"o maior numero é $num5";
}
else{
    print"parabens estragou meu algoritmo >:(";
}
