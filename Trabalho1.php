<?php
print "Digite o 1º numero:";
$n1 = (int) fgets(STDIN);
print "Digite o 2º numero:";
$n2 = (int) fgets(STDIN);

if($n1>=$n2){
     print"o maior numero é $n1\n";
}
elseif ($n2>=$n1 {
    print"o maior numero é $n2\n";
}
else {
    print"vc fez caquinha :(";
}
