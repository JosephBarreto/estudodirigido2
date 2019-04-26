<?php
$cont = 1;
$contpar = 0;
$contimpar = 0;
while($cont<=10){
    $cont = $cont +1;
    print"digite um numero inteiro:";
    $num = (int) fgets(STDIN);
    if($num % 2 == 0 and $num!=0){
    $contpar = $contpar + 1;
    }
        elseif($num % 2!=0){
        $contimpar = $contimpar + 1;
        }
        else{
         #zero nao conta :D
        }   
}
print"n de impares = $contimpar\n";
print"n de par = $contpar";

