<?php

print("Informe o primeiro numero:\n");
$n1 = fgets(STDIN);
print("Informe o segundo numero:\n");
$n2 = fgets(STDIN);
print("Informe o terceiro numero:\n");
$n3 = fgets(STDIN);



    print("$n1\n$n2\n$n3");

    if($n3 > $n2){

    $aux = $n3;
    $n3 = $n2;
    $n2 = $aux;

    }
        
    if($n2 > $n1){
        
        $aux = $n2;
        $n2 = $n1;
        $n1 = $aux;

    }

    if($n3 > $n2){
        $aux = $n3;
        $n3 = $n2;
        $n2 = $aux;
    }

    print("ordem decrecente\n");
    print("$n1\n$n2\n$n3\n");

?>