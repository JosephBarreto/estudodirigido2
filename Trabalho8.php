<?php
print"digite o preço do 1º produto:";
$price1 = (int) fgets(STDIN);
print"digite o preço do 2º produto:";
$price2 = (int) fgets(STDIN);
print"digite o preço do 3º produto:";
$price3 = (int) fgets(STDIN);
   
if ($price1 < $price2 and $price1 < $price3){
        print "O produto 1 é o mais barato!!\n";
}
    elseif($price2 < $price1 and $price2 < $price3){
        print "O produto 2 é o mais barato!!\n";
    }
    elseif($price3 < $price1 and $price3 < $price2){
        print "O produto 3 é o mais barato!!\n";
    }
    elseif($price1 == $price2 and $price1 < $price3){
        print "O produto 1 e 2 são os mais baratos!!\n";
    }
    elseif($price1 == $price3 and $price1 < $price2){
        print "O produto 1 e 3 são os mais baratos!!\n";
    }
    elseif($price2 == $price3 and $price2 < $price1){
        print "O produto 2 e 3 são os mais baratos!!\n";
    }    
    elseif($price1 == $price2 and $price2 == $price3){
        print "Todos os preços são iguais!!\n";
    }
    else{
        print "volta pra escola e aprenda os numeros de novo ;)\n";
    }
