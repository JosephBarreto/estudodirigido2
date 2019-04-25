<?php
print("Informe o primeiro numero:\n");
$n1 = fgets(STDIN);
print("Informe o segundo numero:\n");
$n2 = fgets(STDIN);
print("Informe o terceiro numero:\n");
$n3 = fgets(STDIN);
    if($n3 >= $n2 and $n2 >= $n1){
        print  "a ordem é $n3, $n2, $n1";
    }
    elseif($n2 >= $n1 and $n1 >= $n3){
        print  "a ordem é $n2, $n1, $n3";
    }
    elseif($n1 >= $n3 and $n3 >= $n2){
        print  "a ordem é $n1, $n3, $n2";
    }
    elseif($n1 >= $n2 and $n2 >= $n3){
        print  "a ordem é $n1, $n2, $n3";
    }
    elseif($n3 >= $n1 and $n1 >= $n2){
        print  "a ordem é $n3, $n1, $n2";
    }
    elseif($n2 >= $n3 and $n3 >= $n1){
        print  "a ordem é $n2, $n3, $n1";
    }
    else{
        print"nao sei como mas vc ferrou o sistema..."
    }
    
