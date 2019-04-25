<?php

print "Digite um numero:";
$number = (int) fgets(STDIN);

if ($number > 0) {
    print"$number é positivo\n";
}
    elseif ($number < 0) {
    print"$number é negativo\n";
} 
else {
    print"$number não é nem negativo, nem positivo\n";
}
    
