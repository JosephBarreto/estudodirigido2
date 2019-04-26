<?php
print"digite a numero correspondente a 'a':";
$numberA = (int) fgets(STDIN);
if($numberA == 0){;
    print"o a não pode ser 0 se não nao seria uma equaçao do segundo grau.";
}
    else{
        print"digite a numero correspondente a 'b':";
        $numberB = (int) fgets(STDIN);
        print"digite a numero correspondente a 'c':";
        $numberC = (int) fgets(STDIN);

        $delta = (-1*$numberB)**2 - (4*$numberA*$numberC);
        if($delta < 0){
            print"a equação nao tem raizes reais porque o delta que é $delta é negativo";
        }
            elseif($delta == 0){
                $root = (-$numberB + sqrt($delta))/(2 * $numberA);
                print"o delta é igual a zero e por isso existe somente uma raiz real que é $root";
            }
            elseif($delta > 0){
                $root = (-$numberB + sqrt($delta))/(2 * $numberA);
                $root2 = (-$numberB - sqrt($delta))/(2 * $numberA);
                
                print"o delta é igual a $delta que é positivo por isso existe duas raizes reais que são $root e $root2";
                
            }
        
    }
